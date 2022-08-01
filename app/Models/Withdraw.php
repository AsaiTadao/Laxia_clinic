<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'withdraws';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'clinic_id',
    'month',
    'price',
    'tax',
    'system_fee',
    'paid_at',
    'point'
  ];

  protected $appends = [
    'total',
    'funding'
  ];

  public function getTotalAttribute()
  {
      $total=floor($this->price * $this->tax / 100) + $this->system_fee-$this->point;
      if($total>0){
        return $total;
      }
      return 0;
  }
  public function getFundingAttribute()
  {
    $total=floor($this->price * $this->tax / 100) + $this->system_fee-$this->point;
    if($total>0){
      return 0;
    }
    return abs($total);
  }
}
