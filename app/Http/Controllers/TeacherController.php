<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;
use App\Repositories\TeacherRepository;
use App\Repositories\DesignationRepository;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

use App\Models\Teacher;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;

class TeacherController extends Controller
{
    public function dashboard()
    {
        return view('teacher.dashboard');
    }
    public function students(Request $request)
    {
        $batch = $request->batch;
        $maxBatch = Student::max('batch');
        $students = Student::with('user')
            ->where('department_id', auth()->user()->teacher->department->id)
            ->when($batch && $batch > -1, function ($query) use ($batch) {
                $query->where('batch', $batch);
            })
            ->get();
        return view('teacher.students')
            ->with('students', $students)
            ->with('maxBatch', $maxBatch)
            ->with('selected_batch', $request->batch);
    }
    public function createStudent()
    {
        return view('teacher.add-student');
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
        $student->department_id = auth()->user()->teacher->department->id;
        $student->save();
        // return view('admin.add-student',['message'=>["Successfully Added"]]);
        return back()->with('message', 'Successfully saved');
    }
    public function store(StoreTeacherRequest $request)
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
        // return view('admin.add-student',['message'=>["Successfully Added"]]);
        return back()->with('message', 'Successfully saved');
    }
    public function deleteStudent(Student $student)
    {
        $student->delete();
        return back();
    }
    public function editStudent(Student $student)
    {
        return view('teacher.edit-student')->with('student', $student);
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
    public function graduates(Request $request)
    {
        $batch = $request->batch;
        $students = Student::where('completed_credit', '>=', 160)
            ->where('department_id', auth()->user()->teacher->department->id)
            ->when($batch && $batch > 0, function ($query) use ($batch) {
                $query->where('batch', $batch);
            })
            ->get();
        return view('teacher.graduates')
            ->with('students', $students)
            ->with('maxBatch', Student::max('batch'))
            ->with('selected_batch', $request->batch);
    }
    public function certificate(Student $student)
    {
        return view('teacher.certificate')->with('student', $student);
    }
    public function certificateByBatch($batch_no)
    {
        return view('teacher.certificate-batch')
            ->with('student', Student::first());
    }
    public function addExcell()
    {
        return view('teacher.add-student-excell')
            ->with('maxBatch', Student::max('batch'));
    }
    public function storeStudentExcell(Request $request)
    {
        $collection = Excel::toCollection(new StudentImport(), $request->file('excell')->store('files'))
            ->first();
        foreach ($collection as $row) {
            if ($row[2] == '' || !isset($row[2]) || $row[2] == 'Roll') {
                continue;
            }
            $user = new User();
            $user->name = $row[1];
            $user->email = $row[3];
            $user->phone = $row[4];
            $user->role = 'student';
            $user->password = Hash::make('654321');
            $user->save();

            $student = new Student();
            $student->user_id = $user->id;
            $student->roll = $row[2];
            $student->batch = $request->batch;
            $student->cgpa = $row[5];
            $student->completed_credit = $row[6];
            $student->department_id = auth()->user()->teacher->department->id;
            $student->save();
        }
        return back()->with('message', 'Successfully added');
    }
    public function cert(Student $student)
    {
        return view('pdf.cert')
            ->with('student', $student);
    }
    public function downloadCert(Student $student)
    {
        $data = [
            'student' => $student
        ];
        $pdf = PDF::loadView('pdf.cert', $data);
        // $pdf->set_paper(array(0, 0, 1650, 1275));
        return $pdf->stream('cert.pdf', array("Attachment" => false));
    }
    public function downloadAll(Request $request)
    {
        $ids = explode(',', $request->ids);
        // File::deleteDirectory(public_path('pdf/'));
        if (!File::isDirectory(public_path('pdf/'))) {
            File::makeDirectory(public_path('pdf/'));
        }
        File::cleanDirectory(public_path('pdf/'));

        foreach ($ids as $id) {
            $student = Student::find($id);
            $data = [
                'student' => $student
            ];
            $pdf = Pdf::loadView('pdf.cert', $data);
            $path = "pdf/{$id}.pdf";
            // return public_path($path);
            $pdf->save($path);
            // $zip->addFile(public_path($path));
        }
        $zip = new ZipArchive();
        if ($zip->open(public_path('certificates.zip'), ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            $files = File::files(public_path('pdf/'));
            foreach ($files as $key => $value) {
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);
            }
        } else {
            return 'failed to open';
        }
        $zip->close();
        return response()->download(public_path('certificates.zip'));
    }
}
