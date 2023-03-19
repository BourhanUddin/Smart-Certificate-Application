<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $user = User::where('email', $username)->first();
        if($user){
            if(Hash::check($password,$user->password)){
                Auth::login($user);
                if($user->role=='admin'){
                    return redirect('/admin/dashboard');
                }else if($user->role=='student'){
                    return redirect('/student/dashboard');
                }else if($user->role=='teacher'){
                    return redirect('/teacher/dashboard');
                }
            }else {
                return back()->with('message', 'Incorrect password.');
            }
        }else {
            return back()->with('message', 'This email is not registered');
        }
        /*
        if ($request->user_type == -1) {
            return view('public.login', ['errors' => ['select user type']]);
        } else if ($request->user_type == 0) {
            $admin = Admin::where('email', $username)->first();
            if (!$admin) {
                return view('public.login', ['errors' => ['Invalid username']]);
            } else {
                if (Hash::check($password, $admin['password'])) {
                    session(['is_admin' => true]);
                    return view('admin.dashboard');
                } else return view('public.login', ['errors' => ['Invalid password']]);
            }
        } else if ($request->user_type == 2) {
            $teacher = Teacher::where('email', $username)->first();
            if (!$teacher) {
                return view('public.login', ['erros' => ['Invalid username']]);
            } else {
                if (Hash::check($password, $teacher['password'])) {
                    session(['is_admin' => false]);
                    return view('admin.dashboard');
                } else return view('public.login', ['errors' => ['Invalid password']]);
            }
        } else if ($request->user_type == 3) {
            $student = Student::where('roll', $username)->first();
            if (!$student) {
                return view('public.login', ['errors' => ['Invalid username']]);
            } else {
                if (Hash::check($password, $student['password'])) {
                    session(["id" => $student->id]);
                    session(["name" => $student->name]);
                    session(['cgpa' => $student->cgpa]);
                    return view('student.dashboard');
                } else return view('public.login', ['errors' => ['Invalid password']]);
            }
        } */
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
