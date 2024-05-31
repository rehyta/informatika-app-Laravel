<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Material;
use App\Models\Instruction;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function materialShow(Material $material)
    {

        if (!$material) {
            return abort(404); // Material not found
        }

    
        return view('course.material', [
            "material"=>$material,
            "active"=> 'material',
            "title"=>$material->title,
            "content"=>$material->content,
            
        ]);
    }

    public function livecodeShow(Material $material)
    {

        return view('course.livecode',[
            "material"=>$material,
            "active"=>'material',
            "title" => $material->title,
            "soal"=> $material->soal,
        ]);
    }

}