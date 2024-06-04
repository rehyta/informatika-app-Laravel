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
        $process = Process::create([
            "user_id" => auth()->user()->id,
            "material_id" => $material_id,
            "livecode_id" => null,
            "material_status" => true,
            "livecode_status" => false,
        ]);

        if ($process) {
            return redirect('/course')->with('success', 'Material status updated successfully.');
        }

        return redirect('/course')->with('error', 'Process not found.');
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



}