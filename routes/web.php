<?php

use App\Http\Controllers\ControllerCompiler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
    ]);
})->name('Home');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/course-list',[DashboardController::class,'courseList']);
Route::get('/course-list-test',[DashboardController::class,'get_course_all']);

Route::get('/compilebox',[ControllerCompiler::class,'index']);
Route::post('/compiler',[ControllerCompiler::class,'processCode']);
Route::get('/compilersave',[ControllerCompiler::class,'store']);

Route::get('/course/materi/{materialId}',[CourseController::class,'show_by_id']);
Route::get('/course/{slug}', 'CourseController@showTableOfContents')->name('course.table_of_contents');

Route::get('/percobaan',[PercobaanController::class,'daftarisi'])->name('percobaanDaftarIsi');
Route::get('/percobaan/list',[PercobaanController::class,'percobaanCourseList'])->name('percobaanCourseList');
Route::get('/percobaan/livecode',[PercobaanController::class,'percobaan2'])->name('percobaanMateri');
Route::get('/percobaan/materi',[PercobaanController::class,'percobaan'])->name('percobaanLiveCode');
Route::get('/test', function(){
    return view('percobaan.test',[
        'title' => "test"
    ]);
});