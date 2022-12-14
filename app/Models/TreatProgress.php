<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\TreatIndicator;

class TreatProgress extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'treat_progresses';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'diary_id',
    'from_treat_day',
    'content',
  ];
  protected $appends = [
    'views_count',
    'comments_count',
    'likes_count'
  ];

  public function likers()
  {
      return $this->morphToMany(Patient::class, 'likeable');
  }
  public function getLikesCountAttribute()
  {
    return $this->likers()->count();
  }
  public function getViewsCountAttribute()
  {
    return $this->viewers()->count();
  }
  public function getCommentsCountAttribute()
  {
    return $this->comments()->count();
  }

  public function diary()
  {
    return $this->belongsTo(Diary::class);
  }
  public function medias()
  {
    return $this->morphMany(Media::class, 'mediable');
  }
  public function statuses()
  {
    return $this->belongsToMany(TreatIndicator::class, 'treat_status', 'progress_id', 'indicator_id')
      ->withPivot('value');
  }
  public function viewers()
  {
    return $this->morphToMany(Patient::class, 'viewable', 'viewables','viewable_id', 'patient_id');
  }

  public function comments()
  {
    return $this->morphMany(Comment::class, 'commentable');
  }

  public function comments_limit50()
  {
    return $this->morphMany(Comment::class, 'commentable')
      ->with('allChildren')
      ->whereNull('parent_id')
      ->latest()
      ->take(50);
  }
}
