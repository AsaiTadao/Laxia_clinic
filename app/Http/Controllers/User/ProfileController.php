<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\User\ProfileService;
use App\Http\Requests\User\ProfileRequest;
use App\Traits\MediaUpload;
use App\Http\Resources\Me as MeResource;
use App\Models\Patient;
use App\Models\User;

class ProfileController extends Controller
{
    use MediaUpload;

    /**
     * @var ProfileService
     */
    protected $service;

    public function __construct(
        ProfileService $service
    ) {
        $this->service = $service;
    }

    public function me()
    {
        return $this->service->get(auth()->guard('patient')->user()->patient->id);
        // return new MeResource(auth()->guard('patient')->user()->patient);
    }

    public function invite(Request $request)
    {   $params = $request->all();
        return $this->service->invite(auth()->guard('patient')->user()->patient->id,$params['code']);
        // return new MeResource(auth()->guard('patient')->user()->patient);
    }
    public function registerDetail(Request $request) {
        if(isset($request['id'])){
            $patient = Patient::where('user_id',$request['id'])->first();
        }
        else{
            $currentUser = auth()->guard('patient')->user();
            $patient = $currentUser->patient;
        }
        $patient->update(['unique_id'=>''], ['id' => $patient->id]);
        // return $patient;
        $validator = Validator::make($request->all(), [
            'patients' => ['required', 'array'],
            'patients.unique_id' => 'required|string|unique:patients,unique_id,'. $patient->unique_id .'|max:255',
            'patients.name' => 'required|string|max:255',
            'patients.birthday' => 'nullable|date',
            'patients.intro' => 'nullable|string',
            'patients.area_id' => 'nullable|integer|exists:mtb_prefs,id',
            'medias' => 'nullable|file|image',
            'patient_categories' => 'nullable|array'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'message' => 'エラーが発生しました。',
                'errors' => $validator->getMessageBag()->toArray()
            ]);
        }
        \DB::beginTransaction();
        try {
            $params = $request->all();
            if ($request->file('medias')) {
                $pathInfo = $this->mediaUploadWithThumb('/user/patients', $request->medias, 150);
                $params['patients']['photo'] = $pathInfo[1];
            }
            $patient = $this->service->update($params, ['id' => $patient->id]);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollBack();
            \Log::error($e->getMessage());

            return response()->json([
                'status' => 0,
                'message' => 'プロフィールを登録できません。'
            ]);
        }

        return response()->json([
            'status' => 1,
            'data' => $patient
        ]);
    }

}
