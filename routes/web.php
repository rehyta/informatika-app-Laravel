<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControllerCompiler;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MyLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\liveCodeController;
use App\Http\Controllers\PercobaanController;
use App\Http\Controllers\quizAController;
use App\Models\Course;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('landingPage.index',[
        'title' => "Landing Page"
    ]);})->name('Home');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Auth::routes(['verify' => true]);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home',[DashboardController::class,'home']);
Route::get('/course',[DashboardController::class,'courses']);
Route::get('/about',[DashboardController::class,'about']);

Route::get('/send-test-email', function () {
    \Illuminate\Support\Facades\Mail::raw('Test email from Laravel using Mailtrap', function ($message) {
        $message->to('rrehyta@gmail.com')
                ->subject('Test Email');
    });
    return 'Test email sent!';
});


Route::get('/materi/{material:slug}',[CourseController::class,'materialShow']);
Route::get('/materi/{material_id}/update-status',[CourseController::class,'updateMaterialStatus'])->name('material.update-status');
Route::get('/livecode/{material:slug}', [CourseController::class, 'livecodeShow']);
Route::get('/pre-test', [CourseController::class, 'test']);
Route::get('/materi/{material_id}/update-status',[CourseController::class,'updateMaterialStatus'])->name('material.update-status');

Route::get('/compilebox',[ControllerCompiler::class,'index']);
Route::post('/compiler',[ControllerCompiler::class,'processCode']);
Route::post('/save',[ControllerCompiler::class,'store']);
Route::post('/savetest',[ControllerCompiler::class,'savetest']);

Route::get('/course/materi/{materialId}',[CourseController::class,'show_by_id']);
Route::get('/course/{slug}', 'CourseController@showTableOfContents')->name('course.table_of_contents');

Route::get('/adminboard',[AdminController::class, 'dashboard'])->middleware('admin');
Route::get('/data-siswa',[AdminController::class, 'DataSiswa'])->middleware('admin');
Route::get('/data-course',[AdminController::class, 'DataCourse'])->middleware('admin');
Route::get('/hasil-belajar',[AdminController::class, 'HasilBelajar'])->middleware('admin');

Route::resource('siswa', SiswaController::class);

Route::post('/materi-done/{id}', [ProcessController::class, 'markMaterialDone'])->name('materi.done');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
