<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\CaseService;
use App\Services\MenuService;
use App\Services\ClinicService;
use App\Services\DoctorService;
use App\Services\Master\CategoryService;
use App\Services\DiaryService;
use App\Services\SearchService;

class SearchController extends Controller
{
    protected $caseService;
    protected $menuService;
    protected $clinicService;
    protected $doctorService;
    protected $diaryService;
    protected $searchService;
    protected $categoryService;


    public function __construct(
        CaseService $caseService,
        MenuService $menuService,
        ClinicService $clinicService,
        DoctorService $doctorService,
        DiaryService $diaryService,
        SearchService $searchService,
        CategoryService $categoryService
    ) {
        $this->caseService = $caseService;
        $this->menuService = $menuService;
        $this->clinicService = $clinicService;
        $this->doctorService = $doctorService;
        $this->diaryService = $diaryService;
        $this->searchService=$searchService;
        $this->categoryService=$categoryService;
    }

    public function search(Request $request)
    {
        $currentUser = auth()->guard('patient')->user();
        $patient = $currentUser->patient;
        $params = $request->all();
        // $cases = $this->caseService->paginate($params);
        $menus = $this->menuService->paginate($params);
        $clinics = $this->clinicService->paginate($params);
        $doctors = $this->doctorService->paginate($params);
        // $diaries = $this->diaryService->paginate($params);
        $this->searchService->store($request,$patient->id);
        return response()->json([
            // 'cases' => $cases,
            'menus' => $menus,
            'clinics' => $clinics,
            'doctors' => $doctors,
            // 'diaries' => $diaries,
        ], 200);
    }
    public function globalsearch(){
        $currentUser = auth()->guard('patient')->user();
        $patient = $currentUser->patient;
        $recentsearch=$this->searchService->recentsearch($patient->id);
       $globalsearch=$this->searchService->globalsearch();
       return response()->json([
        'globalsearch' => $globalsearch,
        'recentsearch' => $recentsearch
        ], 200);
    }
    public function recentsearch(){
        $currentUser = auth()->guard('patient')->user();
        $patient = $currentUser->patient;
        $recentsearch=$this->searchService->recentsearch($patient->id);
        return response()->json([
            'recentsearch' => $recentsearch
     ], 200);
    }
    public function midsearch(Request $request)
    {
        $params = $request->all();
        // $midcases = $this->caseService->paginate($params);
        // $cases=[];
        // foreach($midcases as $case){
        //     array_push($cases,$case->id);
        // }
        $currentUser = auth()->guard('patient')->user();
        $patient = $currentUser->patient;
        $this->searchService->store($request['q'] ,$patient->id);
        $categories=[];
        $categories = $this->categoryService->midSearch($params);
        $midmenus = $this->menuService->paginate($params);
        $menus=[];
        foreach($midmenus as $menu){
            array_push($menus,['id'=>$menu->id,'name'=>$menu->name]);
        }
        $midclinics = $this->clinicService->paginate($params);
        $clinics=[];
        foreach($midclinics as $clinic){
            array_push($clinics,['id'=>$clinic->id,'name'=>$clinic->name]);
        }
        $middoctors = $this->doctorService->paginate($params);
        $doctors=[];
        foreach($middoctors as $doctor){
            array_push($doctors,['id'=>$doctor->id,'name'=>$doctor->name]);
        }
        // $middiaries = $this->diaryService->paginate($params);
        // $diaries=[];
        // foreach($middiaries as $diarie){
        //     array_push($diaries,$diarie->id);
        // }
        return response()->json([
            // 'cases' => $cases,
            'menus' => $menus,
            'clinics' => $clinics,
            'doctors' => $doctors,
            'categories' => $categories,
            // 'diaries' => $diaries,
        ], 200);
    }
}
