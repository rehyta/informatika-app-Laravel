<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function get_course_all()
    {
        $courses = Course::with('material')->get();
        // Transform the data structure
        $coursesData = collect($courses)->map(function ($item) {
            return [
                'Materi' => $item->material->slug, // Adjust this based on your actual data structure
            ];
        })->all();
        return view('dashboard.courselistTest', [
            'title' => 'Course List',
            ...compact('coursesData')
        ]);
    }
    public function dashboard()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }

    public function courseList()
    {
        return view('dashboard.courseList', [
            'title' => 'Course List',
        ]);
    }
}
