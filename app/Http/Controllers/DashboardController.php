<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Exercise;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.home', [
            'title' => 'Home',
        ]);
    }
    public function courses()
    {

        return view('dashboard.courses', [
            'title' => 'Course list',
            'courses' => Course::all(),
            'materials'=>Material::all()
        ]);
    }
    public function about()
    {
        return view('dashboard.about', [
            'title' => 'About',
        ]);
    }
}
