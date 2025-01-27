<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Material;
use App\Models\Instruction;
use App\Models\Process;
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

    public function updateMaterialStatus($material_id) {

        $process = Process::updateOrCreate([
            "user_id" => auth()->user()->id,
            "course_id"=> Material::find($material_id)->course_id,
            "material_id" => $material_id,
            "material_status" => true,
        ]);

        if ($process) {
            return redirect('/home')->with('success', 'Material status updated successfully.');
        }

        return redirect('/home')->with('error', 'Process not found.');
    }

    public function livecodeShow(Material $material)
    {

        session()->put('course_id', $material->id);
        
        return view('course.livecode',[
            "material"=>$material,
            "active"=>'material',
            "title" => $material->title,
            "soal"=> $material->soal,
        ]);
        

    }

    public function test()
    {
        return view('pretest.pretest',[
            "title" => 'Pre-test',
        ]);
    }



}