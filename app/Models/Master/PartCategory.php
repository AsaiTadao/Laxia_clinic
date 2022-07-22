<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\Master\Category;

class PartCategory extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'mtb_interest_categories';

  protected $hidden = [
    'created_at',
    'updated_at'
  ];


  public function children()
  {
    return $this->hasMany(Category::class, 'part_id');
  }
}
