<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class liveCodeController extends Controller
{
    //
    public function course2()
    {
        return view('course.course2.course', [
            'title' => 'live code',
        ]);
    }
    public function course3()
    {
        return view('course.course3.course', [
            'title' => 'live code',
        ]);
    }
    public function course4()
    {
        return view('course.course4.course', [
            'title' => 'live code',
        ]);
    }
    public function course5()
    {
        return view('course.course5.course', [
            'title' => 'live code',
        ]);
    }
    public function course6()
    {
        return view('course.midtest', [
            'title' => 'live code',
        ]);
    }
}
