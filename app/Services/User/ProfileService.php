<?php
namespace App\Services\User;

use Illuminate\Support\Arr;
use App\Models\Clinic;
use App\Models\Patient;
use App\Models\Attachment;
use DB;
use Auth;
use Throwable;
use App\Models\PointHistory;
use App\Enums\Common\PointType;

/**
 * Class ProfileService
 * @package App\Services\User
 */
class ProfileService
{
  public function update($attributes, $where)
  {
    $patientAttrs = Arr::get($attributes, 'patients');
    $patient = Patient::updateOrCreate(
      $where,
      $patientAttrs
    );

    $categories = Arr::get($attributes, 'patient_categories');
    $patient->categories()->sync($categories);

    return $patient;
  }

  public function get($id) {
    return Patient::with([
      'questions.medias',
      'questions.categories',
      'questions.owner',
      'diaries.medias',
      'categories',
      'counselings.medias',
      'counselings.categories',
      'favoriteDiaries.medias',
      'favoriteQuestions.medias',
      'favoriteCases.images',
      'favoriteCases.clinic',
      'favoriteCases.menus',
      'favoriteCases.categories',
      'favoriteQuestions.categories',
      'favoriteQuestions.owner',
      'favoriteDoctors',
      'favoriteCounselingReports.medias',
      'favoriteMenus.images',
      'favoriteClinics',
    ])
    ->where('id', $id)
    ->firstOrFail();
  }
  public function invite($id,$code){
    $currentUser = auth()->guard('patient')->user();
    $patient=Patient::where('unique_id',$code)->first();
    $isHis=PointHistory::where([
        ['patient_id','=',$patient->id],
        ['type_id','=',$currentUser->id]
    ])->first();
    if($isHis){
        return response()->json([
            'status' => 0
        ]);
    }
    if($patient){
        PointHistory::create([
            'patient_id' => $patient->id,
            'type' => PointType::USER_INVITATION,
            'type_id' => $currentUser->id,
            'use_point' => config('constants.user_invitation')
        ]);
        PointHistory::create([
            'patient_id' => $currentUser->patient->id,
            'type' => PointType::USER_IIVITE,
            'type_id' => $patient->user_id,
            'use_point' => config('constants.user_invitation')
        ]);
        $patient->increment('point',config('constants.user_invitation'));
        $currentUser->patient->increment('point',config('constants.user_invitation'));
        return response()->json([
            'status' => 1,
        ]);
    }
    else{
        return response()->json([
            'status' => 2
        ]);
    }
    return response()->json([
        'status' => 1
    ]);
  }
}
