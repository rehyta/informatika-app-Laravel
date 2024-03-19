<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function get_course_all()
    {
        $courses = Course::get()->with('material');
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

    public function show_by_id($materialId)
    {
        $material = Material::find($materialId);

        if (!$material) {
            return abort(404); // Material not found
        }


        return view('course.show.material', [
            'title' => "Bahasa Pemrograman",
            ...compact('material')
        ]);
    }





    public function course1()
    {
        return view('course.course1.index', [
            'title' => 'Perkenalan Bahasa Pemrograman',
        ]);
    }
    public function course2()
    {
        return view('course.course2.index', [
            'title' => 'Struktur Dasar C++',
        ]);
    }
    public function course3()
    {
        return view('course.course3.index', [
            'title' => 'Variable dan Tipe Data',
        ]);
    }
    public function course4()
    {
        return view('course.course4.index', [
            'title' => 'Operator dan Aritmatika',
        ]);
    }
    public function course5()
    {
        return view('course.course5.index', [
            'title' => 'Kondisi dan Percabangan',
        ]);
    }
}
