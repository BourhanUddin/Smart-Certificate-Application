<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\DepartmentController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use App\Models\Department;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('public.index');
});

Route::get('/admins', [AdminController::class, 'index']);
Route::get('create-pdf-file', [PdfController::class, 'index']);

Route::view('/certificate', 'pdf.test');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
});


Route::controller(StudentController::class)->prefix('student')->group(function () {
    Route::get('alumni-info/{student}', 'alumniInfo');
    Route::post('certificate', 'certificatePreview');
    Route::get('/', 'index');
    Route::post('/', 'showByBatch');
    Route::get('add', 'create');
    Route::post('add', 'store');
    Route::get('graduates', 'graduates');
    Route::post('graduates', 'graduatesByBatch');
    Route::get('update/{student}', 'edit');
    Route::post('update/{student}', 'update');
    Route::get('delete/{student}', 'destroy');
});

Route::controller(TeacherController::class)->prefix('teacher')->group(function () {
    Route::get('/', 'show');
    Route::get('add', 'create');
    Route::post('add', 'store');
});
Route::controller(LoginController::class)->group(function () {
    Route::view('login', 'public.login2');
    Route::post('login', 'login');
    Route::get('logout', 'logout');
});
Route::controller(AdvisorController::class)->group(function () {
    Route::get('advisors', 'index');
});
Route::group([
    'controller' => AdminController::class,
    'prefix' => 'admin',
    'middleware' => AdminMiddleware::class
], function () {
    Route::get('/', function () {
        return redirect('admin/dashboard');
    });
    Route::get('/dashboard', 'index');
    Route::get('/student', 'students');
    Route::get('/student/add', 'createStudent');
    Route::post('/student/add', 'storeStudent');
    Route::get('/student/delete/{student}', 'deleteStudent');
    Route::get('/student/update/{student}', 'editStudent');
    Route::post('student/update/{student}', 'updateStudent');

    Route::get('/student/graduates', 'graduates');
    Route::get('/teachers', 'teachers');
    Route::get('/teacher/add', 'createTeacher');
    Route::post('/teacher/add', 'storeTeacher');
    Route::get('/advisors', 'advisors');
    Route::post('/advisor/update/{advisor}', 'updateAdvisor');

    Route::get('/user-activity', 'userActivity');

    Route::resource('department', DepartmentController::class);
});
Route::group([
    'controller' => StudentController::class,
    'prefix' => 'student',
    'middleware' => StudentMiddleware::class
], function () {
    Route::redirect('/', '/student/dashboard');
    Route::get('/dashboard', 'dashboard');
    Route::get('/certificate', 'certificate');
    Route::get('/profile', 'profile');
    Route::post('/profile', 'updateProfile');


    Route::get('logout', 'logout');
});
Route::group([
    'controller' => TeacherController::class,
    'prefix' => 'teacher',
    'middleware' => TeacherMiddleware::class
], function () {
    Route::redirect('/', 'dashboard');
    Route::get('/dashboard', 'dashboard');
    Route::get('student/add-excell', 'addExcell');
    Route::post('student/add-excell', 'storeStudentExcell');
    Route::get('/student', 'students');
    Route::post('/student', 'storeStudent');
    Route::get('/student/{student}', 'createStudent');
    Route::get('/student/delete/{student}', 'deleteStudent');
    Route::get('/student/update/{student}', 'editStudent');
    Route::post('student/update/{student}', 'updateStudent');
    Route::get('/graduates', 'graduates');
    Route::get('/certificate/{student}', 'certificate');

    //dompdf
    Route::get('/cert/{student}', 'cert');
    Route::get('/c/{student}', 'c');
    Route::get('/download-cert/{student}', 'downloadCert');
    Route::get('/download-all', 'downloadAll');

    Route::get('/certificate/batch/{batch_no}', 'certificateByBatch');


    Route::get('add', 'create');
    Route::post('add', 'store');
});
