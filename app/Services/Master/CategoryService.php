<?php
namespace App\Services\Master;

use Illuminate\Support\Arr;
use App\Models\Master\Category;
use App\Models\Master\PartCategory;
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
  public function toArrayPart($id)
  {
    return PartCategory::where('id',$id)
    ->with('allChildren')
    ->get();
  }
  public function toIndex($id)
  {
    return Category::where('parent_id',$id)
      ->with('allChildren')
      ->get();
  }
}
