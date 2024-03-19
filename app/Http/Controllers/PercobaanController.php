<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PercobaanController extends Controller
{
    //
    public function percobaan()
    {
        return view('percobaan.percobaan', [
            'title' => 'Percobaan',
        ]);
    }
    public function percobaanCourseList()
    {
        return view('percobaan.courseList', [
            'title' => 'Percobaan',
        ]);
    }
    public function percobaan2()
    {
        return view('percobaan.percobaan2', [
            'title' => 'percobaan Live Code',
        ]);
    }
    public function daftarisi()
    {
        return view('percobaan.daftarisi', [
            'title' => 'percobaan Daftar Isi',
        ]);
    }

}