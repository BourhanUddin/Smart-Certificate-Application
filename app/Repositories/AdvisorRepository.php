<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Teacher;
use App\Models\Advisor;
use App\Models\Student;

class AdvisorRepository implements AdvisorRepositoryInterface {
    public function all(){
        $advisorTable = DB::table('advisors')
            ->join('teachers','teachers.id','=','advisors.teacher_id')
            ->select('advisors.id','teachers.name','advisors.batch')
            ->get();
        return $advisorTable;
    }
    public function maxBatch(){
        return  Student::max('batch');
    }
}
