<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControllerCompiler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
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

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home',[DashboardController::class,'home']);
Route::get('/course',[DashboardController::class,'courses']);
Route::get('/about',[DashboardController::class,'about']);


Route::get('/materi/{material:slug}',[CourseController::class,'materialShow']);
Route::get('/livecode/{material:slug}', [CourseController::class, 'livecodeShow']);

Route::get('/compilebox',[ControllerCompiler::class,'index']);
Route::post('/compiler',[ControllerCompiler::class,'processCode']);
Route::post('/save',[ControllerCompiler::class,'store']);

Route::get('/course/materi/{materialId}',[CourseController::class,'show_by_id']);
Route::get('/course/{slug}', 'CourseController@showTableOfContents')->name('course.table_of_contents');

Route::get('/adminboard',[AdminController::class, 'dashboard']);
Route::get('/data-siswa',[AdminController::class, 'DataSiswa']);
Route::get('/data-course',[AdminController::class, 'DataCourse']);
Route::get('/hasil-belajar',[AdminController::class, 'HasilBelajar']);

Route::resource('siswa', SiswaController::class);