<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Livecode;
use App\Models\Process;

class DashboardController extends Controller
{
    public function home()
    {
        $courses = Course::with('processes')->get();

        $progress = Process::select('processes.*', 'courses.title as course_title')
        ->join('courses', 'processes.course_id', '=', 'courses.id')
        ->get();

        dd($progress);
        

            return view('dashboard.home', [
                'title' => 'Home',
                'process'=>$progress,
                'courses'=>$courses,
            ]);
    }
    public function courses()
    {

        return view('dashboard.courses', [
            'title' => 'Courses',
            'process'=>Process::all(),
            'courses'=>Course::all(),
            'materials'=> Material::all(),
            'livecodes'=>Livecode::all(),
        ]);

    }
    

    public function about()
    {
        return view('dashboard.about', [
            'title' => 'About',
        ]);
    }
}
