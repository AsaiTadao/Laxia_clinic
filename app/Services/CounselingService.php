<?php
namespace App\Services;

use Illuminate\Support\Arr;
use App\Models\Master\Category;
use App\Models\CounselingReport;
use App\Models\Media;
use App\Models\Clinic;
use DB;
use Auth;
use Throwable;

/**
 * Class CounselingService
 * @package App\Services
 */
class CounselingService
{
  public function paginate($search)
  {
    $per_page = isset($search['per_page']) ? $search['per_page'] : 20;
    $query = CounselingReport::query()
      ->with([
        'medias',
        'clinic',
        'mediaSelf',
        'mediaLike',
        'mediaDislike',
        'categories'
      ])->withCount('likers');

    if (isset($search['category_id']))
    {
      $category = Category::find($search['category_id']);
      $ids = $category->descendantsAndSelf()->pluck('id');
      $query->whereHas('categories', function($subquery) use ($ids) {
        $subquery->whereIn('counseling_categories.category_id', $ids);
      });
    }
    // if(isset($search['q']) && $search['q'] != '') {
    //   $query->where(function ($query3){
    //     $query3->whereHas('doctor', function($subquery) use ($search) {
    //           $subquery->where(function($query2) use ($search) {
    //                   $query2->where('kata_name', 'like', "%{$search['q']}%")
    //                   ->orWhere('hira_name', 'like', "%{$search['q']}%");
    //           });
    //       });
    //   });
    if(isset($search['q']) && $search['q'] != '') {
        $query->whereHas('doctor', function($subquery) use ($search) {
            $subquery->where(function($query) use ($search) {
                    $query->where('kata_name', 'like', "%{$search['q']}%")
                    ->orWhere('hira_name', 'like', "%{$search['q']}%");
            });
        })->orwhereHas('clinic', function($subquery) use ($search) {
            $subquery->where(function($query) use ($search) {
                    $query->where('name', 'like', "%{$search['q']}%");
            });
        });
    }
    if (isset($search['favorite']) && $search['favorite'] == 1)
    {
      $currentUser = auth()->guard('patient')->user();
      if (isset($currentUser) && isset($currentUser->patient)) {
        $patient_id = $currentUser->patient->id;
        $query->whereIn('id', function($subquery) use ($patient_id) {
          $subquery->select('favoriable_id')
            ->from('favorites')
            ->where('favoriable_type', 'App\Models\CounselingReport')
            ->where('patient_id', $patient_id);
        });
      }
    }
    if (isset($search['city_id'])) {
      $city_id = $search['city_id'];
      $query->whereHas('clinic', function($subquery) use ($city_id) {
        $subquery->whereIn('clinics.city_id', explode(',',$city_id));
      });
    }
    if (isset($search['pref_id'])) {
      $pref_id = $search['pref_id'];
      $query->whereHas('clinic', function($subquery) use ($pref_id) {
        $subquery->where('pref_id', $pref_id);
      });
    }

    // if (isset($search['city'])) {
    //   $city = $search['city'];
    //   $query->whereHas('clinic', function($subquery) use ($city) {
    //     $subquery->where('addr01', "LIKE", "%{$city}%");
    //   });
    // }

    if (isset($search['patient_id']))
    {
      $query->where('patient_id', $search['patient_id']);
    }

    // if (isset($search['orderby'])) {
    //   $orderby = $search['orderby'];
    //   if ($orderby == 'comments_count') {
    //     $query->withCount('comments')
    //       ->orderby('comments_count', 'DESC');
    //   } else if ($orderby == 'news') {
    //     $query->orderby('updated_at', 'DESC');
    //   }
    // } else {
    //   $query->orderby('updated_at', 'desc');
    // }
    if(isset($search['filter'])&&$search['filter']==0)
    {
            //$query->selectRaw("menus.*, IF(ISNULL(`diary_menu`.`id`), 0, COUNT(`menus`.`id`)) as diarycount")->leftJoin('diary_menu', 'menus.id', '=', 'diary_menu.menu_id')->groupBy('menus.id');
        // $result=$query->get();
        // return array_slice($result->sortByDesc('likes_count')->values()->all(),($search['page']-1)*$search['per_page'],$search['per_page']);
        $query->orderby('likers_count', 'DESC');
    }
    else if(isset($search['filter'])&&$search['filter']==1){
        $query->orderby('updated_at', 'DESC');
    }
    $query->where('public', 1);
    $query->orderby('created_at', 'DESC');
    return $query->paginate($per_page);
  }

  public function get($id)
  {
    // return Question::findOrFail($id);
  }

  public function store($attributes, $addtional = [])
  {
    $counselingAttrs = Arr::get($attributes, 'counselings');
    $cateArr = Arr::get($attributes, 'categories');

    $questionArr = Arr::get($attributes, 'questions');

    $data = array_merge($counselingAttrs, $addtional);
    $counseling = CounselingReport::create($data);

    $counseling->categories()->sync($cateArr);
    if(isset($attributes['medias'])){
        $mediaArr = Arr::get($attributes, 'medias');
        foreach ($mediaArr as $key => $ids)
        {
            foreach ($ids as $id)
            {
                $media = Media::find($id);
                if (!$media) continue;
                $media->update(['category' => $key]);
                $counseling->medias()->save($media);
            }
        }
    }

    foreach ($questionArr as $item)
    {
      $counseling->questions()->create([
        'question' => $item['question'],
        'answer' => $item['answer'],
      ]);
    }

    return $counseling->load([
      'categories',
      'mediaSelf',
      'mediaLike',
      'mediaDislike',
      'questions'
    ]);

    return $counseling;
  }

  public function update($attributes, $where)
  {
    // return true;
    $counseling =CounselingReport::where($where)->firstOrFail();
    $counselingAttrs = Arr::get($attributes, 'counselings');
    $cateArr = Arr::get($attributes, 'categories');
    $questionArr = Arr::get($attributes, 'questions');
    $counseling->update($counselingAttrs);

    $counseling->categories()->sync($cateArr);
    $counseling->medias()->update([
        'mediable_type'=>""
      ]);
    if(isset($attributes['medias'])){
        $mediaArr = Arr::get($attributes, 'medias');
        foreach ($mediaArr as $key => $ids)
        {
            foreach ($ids as $id)
            {
                $media = Media::find($id);
                if (!$media) continue;
                $media->update(['category' => $key]);
                $counseling->medias()->save($media);
            }
        }
    }
    $counseling->questions()->delete();
    foreach ($questionArr as $item)
    {
      $counseling->questions()->create([
        'question' => $item['question'],
        'answer' => $item['answer'],
      ]);
    }

    return $counseling->load([
      'categories',
      'mediaSelf',
      'mediaLike',
      'mediaDislike',
      'questions'
    ]);
  }
}
