<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class quizAController extends Controller
{
    //
    public function start()
    {
        return view('kuesioner.start', [
            'title' => 'Mini Quiz A',
        ]);
    }
}
