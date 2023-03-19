<?php
namespace App\Repositories;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class TeacherRepository implements TeacherRepositoryInterface {
    public function all(){
        //return Teacher::all();
        $teachers = DB::table('teachers')
            ->join('designations','teachers.designation','=','designations.id')
            ->select('teachers.name','teachers.email','teachers.phone','designations.designation')
            ->get();
        return $teachers;
    }
    public function allRaw(){
        return Teacher::all();
    }
}
