<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Requests\UpdateAdvisorRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Admin;
use App\Models\Advisor;
use App\Models\Department;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function students(Request $request)
    {
        $batch = $request->batch;
        $department = Department::find($request->department_id);
        $departments = Department::all();
        // if ($department) {
        //     if ($batch && $batch > 0) {
        //         $students = Student::where('department_id', $department->id)->where('batch', $batch)->get();
        //     } else {
        //         $students = Student::where('department_id', $department->id);
        //     }
        // } else {
        //     if ($batch && $batch > 0) {
        //         $students = Student::where('batch', $batch)->get();
        //     } else {
        //         $students = Student::all();
        //     }
        // }
        $students = Student::with('user')
            ->when($department, function ($query) use ($department) {
                $query->where('department_id', $department->id);
            })
            ->when($batch && $batch > 0, function ($query) use ($batch) {
                $query->where('batch', $batch);
            })
            ->get();
        return view('admin.students')
            ->with('students', $students)
            ->with('selected_batch', $batch)
            ->with('maxBatch', Student::max('batch'))
            ->with('departments', $departments);
    }
    public function index()
    {
        $studentCount = Student::count();
        return view('admin.dashboard')
            ->with('studentCount',Student::count())
            ->with('userCount',User::count())
            ->with('teacherCount',Teacher::count())
            ->with('deptCount',Department::count());
    }
    public function createStudent()
    {
        return view('admin.add-student')
            ->with('departments', Department::all());
    }
    public function storeStudent(StoreStudentRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('654321');
        $user->role = 'student';
        $user->save();

        $student = new Student();
        $student->user_id = $user->id;
        $student->roll = $request->roll;
        $student->batch = $request->batch;
        $student->completed_credit = $request->completed_credit;
        $student->cgpa = $request->cgpa;
        $student->department_id = $request->department_id;
        $student->save();
        // return view('admin.add-student',['message'=>["Successfully Added"]]);
        return back()->with('message', 'Successfully saved');
    }
    public function graduates(Request $request)
    {
        $batch = $request->batch;
        $department = Department::find($request->department_id);
        $departments = Department::all();
        // if ($department) {
        //     if ($batch && $batch > 0) {
        //         $students = Student::where('department_id', $department->id)->where('batch', $batch)->get();
        //     } else {
        //         $students = Student::where('department_id', $department->id);
        //     }
        // } else {
        //     if ($batch && $batch > 0) {
        //         $students = Student::where('batch', $batch)->get();
        //     } else {
        //         $students = Student::all();
        //     }
        // }
        $students = Student::where('completed_credit', '>=', 160)
            ->when($department, function ($query) use ($department) {
                $query->where('department_id', $department->id);
            })
            ->when($batch && $batch > 0, function ($query) use ($batch) {
                $query->where('batch', $batch);
            })
            ->get();
        return view('admin.graduates')
            ->with('students', $students)
            ->with('departments', $departments)
            ->with('maxBatch', Student::max('batch'))
            ->with('selected_batch', $request->batch);
    }
    public function teachers(Request $request)
    {
        $department = Department::find($request->department_id);
        $teachers = Teacher::when($department, function ($query) use ($department) {
            $query->where('department_id', $department->id);
        })->get();
        return view('admin.teachers')
            ->with('teachers', $teachers)
            ->with('departments', Department::all());
    }
    public function createTeacher()
    {
        $departments = Department::all();
        return view('admin.add-teacher')->with('designations', [
            'Professor emeritus',
            'Professor',
            'Associate professor',
            'Assistant professor',
            'Lecturer',
            'Demonstrator'
        ])->with('departments', $departments);
    }
    public function storeTeacher(StoreTeacherRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make('654321');
        $user->role = 'teacher';
        $user->save();
        Teacher::create([
            'user_id' => $user->id,
            'designation' => $request->designation,
            'department_id' => $request->department_id
        ]);
        return back()->with('message', 'Successfully Added');
    }
    public function advisors()
    {
        return view('admin.advisors')
            ->with('advisors', Advisor::all())
            ->with('teachers', Teacher::all());
    }
    public function updateAdvisor(UpdateAdvisorRequest $request, Advisor $advisor)
    {
        $advisor->teacher_id = $request->teacher_id;
        $advisor->save();
        return back();
    }
    public function deleteStudent(Student $student)
    {
        $student->delete();
        return back();
    }
    public function editStudent(Student $student)
    {
        return view('admin.edit-student')->with('student', $student);
    }
    public function updateStudent(UpdateStudentRequest $request, Student $student)
    {
        $user = User::find($student->user->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        $student->completed_credit = $request->completed_credit;
        $student->cgpa = $request->cgpa;
        $student->save();
        return back()->with('message', "Updated successfully");
    }
    public function userActivity()
    {
        $users = User::whereNotNull('last_seen')
            ->orderBy('last_seen', 'DESC')
            ->get();
        return view('admin.user-activity',)
            ->with('users',$users);
    }
}
