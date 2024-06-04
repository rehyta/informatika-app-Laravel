<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Process;
use App\Models\Livecode;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\JoinClause;

class DashboardController extends Controller
{
    public function home()
    {

        $userId = auth()->user()->id;

        // $progress = Process::select('processes.*', 'courses.title as courses_title')
        // ->rightjoin('courses', 'processes.course_id', '=', 'courses.id')
        // ->where ('processes.user_id', $userId)
        // ->get();  
        
        // dd($progress);
        
        // //$courses=Course::get();

        
        // // $title = 'Home';
        //     return view('dashboard.home', [
        //         'title' => 'Home',
        //         'process'=>$progress,
        //     ]);

        $courses = Course::leftJoin('processes', function($join) use ($userId) {
            $join->on('courses.id', '=', 'processes.course_id')
                 ->where('processes.user_id', '=', $userId);
        })
        ->select('courses.*', 'processes.material_status', 'processes.livecode_status')
        ->get();
    
        // Prepare the data for the view
        return view('dashboard.home', [
            'title' => 'Home',
            'courses' => $courses,
        ]);

            //return view('dashboard.home', compact('title', 'courses'));
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
