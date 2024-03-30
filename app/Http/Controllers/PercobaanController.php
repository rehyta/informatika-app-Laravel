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

}