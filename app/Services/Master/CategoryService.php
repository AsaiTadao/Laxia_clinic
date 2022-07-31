<?php
namespace App\Services\Master;

use Illuminate\Support\Arr;
use App\Models\Master\Category;
use App\Models\Master\PartCategory;
use App\Models\Menu;
use DB;
use Auth;
use Throwable;

/**
 * Class CategoryService
 * @package App\Services\Master
 */
class CategoryService
{
  public function toArray()
  {
    return Category::whereNull('parent_id')
      ->with('allChildren')
      ->get();
  }
  public function toArrayParent()
  {
    return Category::whereNull('parent_id')
      ->get();
  }
  public function midSearch($search){
    $mid=[];
    $query = Category::query();
    if(isset($search['q'])){
        $query->where('name', 'LIKE', "%{$search['q']}%");
    }
    $res=$query->whereNotNull('part_id')->get();
    foreach($res as $sub){
        array_push($mid,['id'=>$sub->part_id,'name'=>$sub->name,'part_id'=>$sub->id]);
    }
    $partquert=PartCategory::query();
    if(isset($search['q'])){
        $partquert->where('name', 'LIKE', "%{$search['q']}%");
    }
    $partres=$query->get();
    foreach($partres as $sub){
        array_push($mid,['id'=>$sub->id,'name'=>$sub->name,'part_id'=>$sub->part_id]);
    }
    return $mid;
  }
  public function toArrayPart($id)
  {
    return PartCategory::where('id',$id)
    ->with('allChildren')
    ->first();
  }
  public function toIndex($id)
  {
    return Category::where('parent_id',$id)
      ->with('allChildren')
      ->get();
  }
  public function menulist($id){
    $query=Menu::query()
    ->with([
        'categories'
    ]);
    $query->whereHas('categories', function($subquery) use ($id) {
        $subquery->where('mtb_part_categories.parent_id', $id);
      });
    return $query->get();
  }
}
