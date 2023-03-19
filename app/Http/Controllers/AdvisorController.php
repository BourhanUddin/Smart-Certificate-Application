<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvisorRequest;
use App\Http\Requests\UpdateAdvisorRequest;

use App\Models\Advisor;

use App\Repositories\AdvisorRepository;
use App\Repositories\TeacherRepository;
use App\Services\AdvisorService;

class AdvisorController extends Controller
{
    private $advisorRepository,$teacherRepository;

    public function __construct(AdvisorRepository $advisorRepository,TeacherRepository $teacherRepository){
        $this->advisorRepository = $advisorRepository;
        $this->teacherRepository = $teacherRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisorTable = $this->advisorRepository->all();
        $maxBatch = $this->advisorRepository->maxBatch();

        $advisors =  AdvisorService::filterAdvisors($advisorTable,$maxBatch);
        $teachers = $this->teacherRepository->allRaw();

        return view('admin.advisors',[
            'advisors'=>$advisors,
            'teachers'=>$teachers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdvisorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvisorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function show(Advisor $advisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Advisor $advisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdvisorRequest  $request
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdvisorRequest $request, Advisor $advisor)
    {
        $advisor->teacher_id = $request->teacher_id;
        $advisor->save();
        return redirect('advisors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advisor $advisor)
    {
        //
    }
}
