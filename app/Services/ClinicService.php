<?php
namespace App\Services;

use Illuminate\Support\Arr;
use App\Models\Clinic;
use App\Models\Attachment;
use DB;
use Auth;
use Throwable;

/**
 * Class ClinicService
 * @package App\Services
 */
class ClinicService
{
  public function paginate($search) {
    $per_page = isset($search['per_page']) ? $search['per_page'] : 20;
    $diary_avg = \DB::table('diaries')
      ->select('clinic_id', DB::raw('avg(ave_rate) as ave_rate'))
      ->groupBy('clinic_id');

    $query = Clinic::query()
  ->with([
        'doctors'
      ])->leftJoinSub($diary_avg, 'diary_avg', function ($join) {
        $join->on('clinics.id', '=', 'diary_avg.clinic_id');
      })->select('*')->withCount([
        'diaries'
      ]);
    if (isset($search['q'])) {
      $query->where('name', 'LIKE', "%{$search['q']}%");
    }
    if (isset($search['category_id']))
      {

        $query->whereHas('doctors',function($suvquery) use ($search) {
            $suvquery->whereHas('categories',function($suvquery2) use ($search) {
                $suvquery2->whereIn('doctor_categories.category_id',explode(',',$search['category_id']));
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
            ->where('favoriable_type', 'App\Models\Clinic')
            ->where('patient_id', $patient_id);
        });
      }
    }

    if (isset($search['pref_id'])) {
      $query->where('pref_id', $search['pref_id']);
    }

    if (isset($search['city_id'])) {
      $query->whereIn('city_id', explode(',',$search['city_id']));
    }

    // if (isset($search['orderby'])) {
    //   $orderby = $search['orderby'];
    //   if ($orderby == 'diaries_count') {
    //     $query->withCount('diaries')
    //       ->orderBy('diaries_count', 'DESC');
    //   }
    //   if ($orderby == 'rate') {
    //     $query->orderBy('ave_diaries_rate', 'DESC');
    //   }
    // }
    if(isset($search['category_id'])){
        $query->whereHas('doctors.categories',function($suvquery) use ($search) {
            $suvquery->whereIn('mtb_part_categories.id',explode(',',$search['category_id']));
        });
    }
    if(isset($search['filter'])&&$search['filter']==0)
    {
        //$query->selectRaw("menus.*, IF(ISNULL(`diary_menu`.`id`), 0, COUNT(`menus`.`id`)) as diarycount")->leftJoin('diary_menu', 'menus.id', '=', 'diary_menu.menu_id')->groupBy('menus.id');
        // $result=$query->get();
        // return array_slice($result->sortByDesc('avg_rate')->values()->all(),($search['page']-1)*$search['per_page'],$search['per_page']);
        $query->orderby('ave_rate','Desc');
    }else if(isset($search['filter'])&&$search['filter']==1){
        $query->orderby('diaries_count','Desc');
        //return array_slice($result->sortByDesc('diaries_count')->values()->all(),($search['page']-1)*$search['per_page'],$search['per_page']);
    }
    return $query->paginate($per_page);
  }

  public function get($id)
  {
    $diary_avg = \DB::table('diaries')
      ->select('clinic_id', DB::raw('avg(ave_rate) as ave_rate'))
      ->groupBy('clinic_id');

    return Clinic::with([
        'images',
        // 'menus_limit2',
        'cases.clinic',
        'cases.categories,',
        'cases.doctor',
        'cases.menus',
        'cases.images',
        'doctors',
        'doctors.categories',
        'doctors.clinic',
        'menus.categories',
        'menus.images',
        'counselings.categories',
        'diaries.categories',
      ])->leftJoinSub($diary_avg, 'diary_avg', function ($join) {
        $join->on('clinics.id', '=', 'diary_avg.clinic_id');
      })->select('*')
      ->where('id', $id)
      ->firstOrFail();
  }

  public function update($attributes, $where)
  {
    $clinicAttrs = Arr::get($attributes, 'clinic');
    $clinic = Clinic::where($where)->firstOrFail();
    $clinic->fill($clinicAttrs);
    $clinic->save();
    $companyPhotos = Arr::get($attributes, 'companyPhotos');
    $clinic->images()->delete();
    foreach ($companyPhotos as $photo) {
      $clinic->images()->create([
        'path' => $photo
      ]);
    }
    $clinic->clinic_day_infos()->delete();
    foreach ($attributes['clinic']['work_times'] as $index=> $work_time) {
            $clinic->clinic_day_infos()->create(
                [
                    'day_info_id'=>$index+1,
                    'type'=>$work_time['type']-0,
                    'start_time'=>$work_time['start_time'],
                    'end_time'=>$work_time['end_time'],
                ]
                );
    }
    return $clinic;
  }

  public function getProfile($id)
  {
    return Clinic::with([
        'images',
        // 'menus_limit2',
        // 'stuffs_limit4',
        'doctors.categories',
        'menus.categories',
        'counselings.categories',
        'diaries.categories',
        'cases',
      ])
      ->where('user_id', $id)
      ->firstOrFail();
  }
}
