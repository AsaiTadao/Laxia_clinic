<?php
namespace App\Services;

use Illuminate\Support\Arr;
use App\Models\Reservation;
use App\Models\Payment;
use DB;
use Auth;
use Throwable;

/**
 * Class PaymentService
 * @package App\Services
 */
class PaymentService
{
  public function paginate($search)
  {
    $per_page = isset($search['per_page']) ? $search['per_page'] : 20;

    $query = Payment::with([
      'reservation',
      'reservation.patient',
      'reservation.doctor',
    ]);

    if (isset($search['clinic_id'])) {
      $clinicId = $search['clinic_id'];
      $query->whereHas('reservation', function($subquery) use ($clinicId) {
        $subquery->where('clinic_id', $clinicId);
      });
    }

    if (isset($search['patient_id'])) {
      $patientId = $search['patient_id'];
      $query->whereHas('reservation', function($subquery) use ($patientId) {
        $subquery->where('patient_id', $patientId);
      });
    }
    if(isset($search['start_time'])){
      $start_time=$search['start_time'];
      $query->whereHas('reservation', function($subquery) use ($start_time) {
        $subquery->where([
            ['visit_date','>=',$start_time]
        ]);
      });
    }
    if(isset($search['end_time'])){
        $end_time=$search['end_time'];
      $query->whereHas('reservation', function($subquery) use ($end_time) {
        $subquery->where([
            ['visit_date','<=',$end_time]
        ]);
      });
    }
    $query->orderby('created_at', 'desc');
    $sum = $query->sum('total_price');
    return [
      $query->paginate($per_page),
      $sum
    ];
  }
}
