<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Repositories\StudentRepository;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    private $studentRepository;
    private $batchs;

    public function  __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
        $batchs = array([1, 2, 3, 4, 5]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $this->studentRepository->all();
        return view('admin.students', ['students' => $students, 'batchs' => $this->batchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->batch = $request->batch;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->completed_credit = $request->completed_credit;
        $student->cgpa = $request->cgpa;
        $student->password = Hash::make("654321");
        $student->save();
        return view('admin.add-student', ['message' => ["Successfully Added"]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
    }

    public function showByBatch(Request $request)
    {
        $students = $this->studentRepository->showByBatch($request->batch);
        return view('admin.students', ['students' => $students, 'batchs' => $this->batchs, 'selected_batch' => $request->batch]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.edit-student')
            ->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->completed_credit = $request->completed_credit;
        $student->cgpa = $request->cgpa;
        $student->save();
        return view('admin.edit-student')
            ->with('student', $student)
            ->with('message', "Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        $students = $this->studentRepository->all();
        return view('admin.students', ['students' => $students, 'batchs' => $this->batchs, 'message' => 'Deleted successfully']);
    }
    /*
     * Previews the certificate in html format
     *
     * @param $id
     * @return View
     */
    public function certificatePreview(Request $request)
    {
        return view('pdf.test')->with("id", $request->id)->with("name", $request->name);
    }
    public function alumniInfo(Student $student)
    {
        return view('public.alumni-info', ['student' => $student]);
    }
    public function graduates()
    {
        return view('admin.graduates')
            ->with('students', $this->studentRepository->graduates())
            ->with('batchs', $this->batchs);
    }
    public function graduatesByBatch(Request $request)
    {
        return view('admin.graduates')
            ->with('students', $this->studentRepository->graduatesByBatch($request->batch))
            ->with('batchs', $this->batchs)
            ->with('selected_batch', $request->batch);
    }
    public function dashboard()
    {
        return view('student.index');
    }
    public function certificate()
    {
        // return view('student.certificate');
        $data = [
            'student' => auth()->user()->student
        ];
        $pdf = Pdf::loadView('pdf.cert', $data);
        // $pdf->set_paper(array(0, 0, 1650, 1275));
        return $pdf->stream('cert.pdf', array("Attachment" => false));
    }
    public function profile()
    {
        return view('student.profile');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function updateProfile(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if ($request->submit == 'submit1') {
            $user->address = $request->address;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->postcode = $request->postcode;

            $user->save();
            return back();
        } else if ($request->submit == 'submit2') {
            $user->linkdedin = $request->linkedin;
            $user->facebook = $request->facebook;
            $user->twitter = $request->twitter;
            $user->instagram = $request->instagram;
            $user->save();
            return back();
        } else if ($request->submit == 'submit3') {
            if ($request->new_password == $request->retype_new_password) {
                if (Hash::check($request->old_password, $user->password)) {
                    $user->password = Hash::make($request->new_password);
                    $user->save();
                    return back()->with('msg', 'Password changed successfully');
                } else {
                    return back()->with('msg3', 'Incorrect old password');
                }
            } else {
                return back()->with('msg3', 'Passwords dont match');
            }
        }else if($request->submit == 'submit5') {
            if($request->hasFile('image')){
                $uploadedFile = $request->file('image');
                // $path = $uploadedFile->storeAs('public/students',now()->timestamp.rand(10000,99999).'.jpg');
                $path = $uploadedFile->store('students','public');
                $student = $user->student;
                $student->image = $path;
                $student->save();
                return back()->with('msg5', 'Successfully saved');
            }
        }
    }
}
