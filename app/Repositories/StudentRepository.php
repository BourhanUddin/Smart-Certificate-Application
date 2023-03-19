<?php

namespace App\Repositories;
use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface {
    public function all(){
        return Student::all();
    }
    public function showByBatch($batch){
        return Student::where('batch',$batch)->get();
    }

    public function graduates(){
        return Student::where('completed_credit','>=',160.0)->get();
    }
    public function graduatesByBatch($batch){
        return Student::where('batch',$batch)->where('completed_credit','>=',160.0)->get();
    }

}
