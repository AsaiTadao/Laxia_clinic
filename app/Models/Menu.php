<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\Category;
use App\Models\MenuProcess;

class Menu extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'menus';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'clinic_id',
    'name',
    'price',
    'description',
    'risk',
    'guarantee',
    'treat_time',
    'required_time',
    'masui',
    'hospital_visit',
    'hare',
    'pain',
    'bleeding',
    'hospital_need',
    'basshi',
    'makeup',
    'shower',
    'massage',
    'sport_impossible',
    'photo',
    'status'
  ];

  protected $appends = [
    'likes_count',
    'is_favorite',
    'diarycount',
    'periodsum',
    'avg_rate',
    'alltime'
  ];

  public function clinic()
  {
    return $this->belongsTo(Clinic::class);
  }
  public function getPeriodsumAttribute(){
    return $this->process()->sum('period');
  }
  public function getLikesCountAttribute()
  {
    return $this->likers()->count();
  }
  public function likers()
  {
      return $this->morphToMany(Patient::class, 'favoriable');
  }
  public function process()
  {
    return $this->hasMany(MenuProcess::class)->orderBy('id','asc');
  }
  public function cases()
  {
    return $this->hasMany(TreatCase::class);
  }
  public function getAvgRateAttribute()
  {
     $avg_rate=0;
     $diaries=$this->diaries()->get();
     $count=count($diaries);
     for($i=0;$i< $count;$i++){
        $avg_rate+=$diaries[$i]['ave_rate'];
     }
     if($count){
        return $avg_rate/$count;
     }
     return 0;
  }
  public function categories()
  {
      return $this->belongsToMany(Category::class, 'menu_categories', 'menu_id', 'category_id');
  }

  public function images()
  {
      // return $this->belongsToMany(Menu::class, 'menu_photos', 'menu_id');
      return $this->morphMany(Attachment::class, 'attachable');
  }

  public function scopePublic($query)
  {
    return $query->where('status', 1);
  }
  public function getDiarycountAttribute(){
    return  $this->diaries()->count();
  }
  public function diaries()
  {
    return $this->belongsToMany(Diary::class,'diary_menu','menu_id','diary_id');
  }
  public function favoriters()
  {
    return $this->morphToMany(Patient::class, 'favoriable', 'favorites');
  }
  public function getAlltimeAttribute()
  {
     $alltime=0;
     $processes=$this->process()->get();
     $count=count($processes);
     for($i=0;$i< $count;$i++){
        $alltime+=$processes[$i]['period'];
     }
     return $alltime;
  }
  public function getIsFavoriteAttribute()
  {
    $currentUser = auth()->guard('patient')->user();
    if (!$currentUser || !($currentUser->patient)) return false;
    $favoriterIds = $this->favoriters()
      ->get()
      ->pluck('id')
      ->toArray();
    return in_array($currentUser->patient->id, $favoriterIds);
  }
}
