<?php
namespace App\Services;

use Illuminate\Support\Arr;
use App\Models\Master\Category;
use App\Models\Question;
use App\Models\Media;
use DB;
use Auth;
use Throwable;

/**
 * Class QuestionService
 * @package App\Services
 */
class QuestionService
{
  public function paginate($search)
  {
    $per_page = isset($search['per_page']) ? $search['per_page'] : 20;
    $answer_count = \DB::table('answers')
        ->select('question_id', DB::raw('count(id) as count'))
        ->groupBy('question_id');
    $query = Question::query()
      ->with([
        'owner',
        'medias',
        'categories'
      ])->withCount('likers')->withCount('answer')->leftJoinSub($answer_count, 'answer_count', function ($join) {
        $join->on('questions.id', '=', 'answer_count.question_id');
      });
    if(isset($search['q']) && $search['q'] != '') {
        $query->where('title', 'like', "%{$search['q']}%");
    }
    if (isset($search['category_id']))
    {
      $ids = $search['category_id'];
      $query->whereHas('categories', function($subquery) use ($ids) {
        $subquery->whereIn('question_categories.category_id', $ids);
      });
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
        $query->orderby('likers_count', 'DESC');
            //$query->selectRaw("menus.*, IF(ISNULL(`diary_menu`.`id`), 0, COUNT(`menus`.`id`)) as diarycount")->leftJoin('diary_menu', 'menus.id', '=', 'diary_menu.menu_id')->groupBy('menus.id');
        // $result=$query->get();
        // return array_slice($result->sortByDesc('likes_count')->values()->all(),($search['page']-1)*$search['per_page'],$search['per_page']);
    }
    else if(isset($search['filter'])&&$search['filter']==1){
        $query->orderby('updated_at', 'DESC');
    }
    if(isset($search['isanswer'])&&$search['isanswer']==0)
    {
        $query->where('answer_count.count','>', '0');
        //$query->selectRaw("menus.*, IF(ISNULL(`diary_menu`.`id`), 0, COUNT(`menus`.`id`)) as diarycount")->leftJoin('diary_menu', 'menus.id', '=', 'diary_menu.menu_id')->groupBy('menus.id');
        // $result=$query->get();
        // return array_slice($result->sortByDesc('is_answer')->values()->all(),($search['page']-1)*$search['per_page'],$search['per_page']);
    }
    else if(isset($search['isanswer'])&&$search['isanswer']==1){
        $query->where('answer_count.count','=', null);
        // $result=$query->get();
        // return array_slice($result->sortBy('is_answer')->values()->all(),($search['page']-1)*$search['per_page'],$search['per_page']);
    }
    $query->orderby('created_at', 'DESC');
    return $query->paginate($per_page);
  }

  public function get($id)
  {
    return Question::findOrFail($id);
  }

  public function addAnswer($attributes, $addtional = [])
  {
    $menuAttrs = Arr::get($attributes, 'questions');
    $cateArr = Arr::get($attributes, 'categories');
    $mediaArr = Arr::get($attributes, 'medias');
    $data = array_merge($menuAttrs, $addtional);
    $question = Question::create($data);

    $question->categories()->sync($cateArr);

    foreach ($mediaArr as $id)
    {
      $media = Media::find($id);
      if (!$media) continue;
      $question->medias()->save($media);
    }

    return $question->load(['categories', 'medias']);
  }

  public function getAnswers($attributes, $where)
  {
  }

  public function deleteAnswers($attributes, $where)
  {
  }

  public function store($attributes, $addtional = [])
  {
    $questionAttrs = Arr::get($attributes, 'questions');
    $cateArr = Arr::get($attributes, 'categories');

    $data = array_merge($questionAttrs, $addtional);
    $question = Question::create($data);

    $question->categories()->sync($cateArr);
    if(isset($attributes['medias'])){
        $mediaArr = Arr::get($attributes, 'medias');
        foreach ($mediaArr as $id)
        {
        $media = Media::find($id);
        if (!$media) continue;
        $question->medias()->save($media);
        }
    }
    return $question;
  }
  public function update($attributes, $where)
  {
  
    $question =Question::where($where)->firstOrFail();
    $questionAttrs = Arr::get($attributes, 'questions');
    $cateArr = Arr::get($attributes, 'categories');
    $question->update($questionAttrs);
    
    $question->categories()->sync($cateArr);
    $question->medias()->update([
      'mediable_type'=>""
    ]);
    if(isset($attributes['medias'])){
        $mediaArr = Arr::get($attributes, 'medias');
        foreach ($mediaArr as $id)
        {
        $media = Media::find($id);
        if (!$media) continue;
        $question->medias()->save($media);
        }
    }
    return $question;
  }
}
