<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
Use App\Models\Livecode;
Use App\Models\Course;
Use App\Models\Process;
use App\Models\Pretest;

class ControllerCompiler extends Controller
{
    //
    public function index()
    {
        return view('partials.compiler', [
            'title' => 'Compiler Code',
        ]);
    }
    


    public function processCode(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'input' => 'required|string',
        ]);

        // Mengambil nilai dari textarea dengan nama "input"
        $inputValue = $request->input('input');

        $files = [
            'name' => 'main.cpp',
            'content' => $inputValue
        ];

        $accessToken = '2087b5bd-61bd-4c36-96f0-030e1f84b630';

        // Memproses input, contoh mengubah teks menjadi huruf kapital
        $response = Http::withHeaders([
            'Authorization' => 'Token ' . $accessToken,
            'Content-type' => 'Application/json',
        ])->post('https://glot.io/api/run/cpp/latest',[
            'files' => [$files],
        ]);

        $outputValue = $response->json();

        $stdout = $outputValue['stdout'];

        // Mengirimkan output kembali sebagai respons JSON
        return response()->json(['output' => $stdout]);
    }

    public function store(Request $request)
    {

        $course = Course::find(session('course_id'));
        
        $request->validate([
            'input' => 'required',
            'output' => 'required',
        ]);

        
        $inputValue = $request->input('input');

        $files = [
            'name' => 'main.cpp',
            'content' => $inputValue
        ];

        $accessToken = '2087b5bd-61bd-4c36-96f0-030e1f84b630';

        
        $response = Http::withHeaders([
            'Authorization' => 'Token ' . $accessToken,
            'Content-type' => 'Application/json',
        ])->post('https://glot.io/api/run/cpp/latest',[
            'files' => [$files],
        ]);

        $outputValue = $response->json();

        $stdout = $outputValue['stdout'];
        $stderr = $outputValue['stderr'];

        if ($stderr == "") {
            // Menyimpan input dan output ke database
            $livecode = Livecode::create([
                'course_id' => $course->id,
                'user_id' => auth()->user()->id,
                'input' => $inputValue,
                'output' => $stdout
            ]);

            

            // Process::updated([
            //     "user_id" => auth()->user()->id,
            //     "course_id" => $course->id, 
            //     "livecode_id" => $livecode->id,
            //     "livecode_status" => true,
            // ]);

            if ($livecode) {
                $process = Process::where('user_id', auth()->user()->id)
                ->where('material_id', session('course_id'))
                ->first();

                $process->update([
                    "livecode_id" => $livecode->id,
                    "livecode_status" => true
                ]);

            } else{
                Process::create([
                    "user_id" => auth()->user()->id,
                    "material_id" => session('course_id'),
                    "livecode_id" => $livecode->id,
                    "livecode_status" => true
                ]);
            }

            // Mengirimkan output kembali sebagai respons JSON
            return response()->json(['output' => $stdout]);
        }
        

        // $livecode_id = Livecode::create([
        //     'course_id' => $course->id,
        //     'user_id' => auth()->user()->id,
        //     'input' => $inputValue,
        //     'output' => $stdout
        // ]);

        

    }

    public function savetest(Request $request)
    {
        $request->validate([
            'input' => 'required',
            'output' => 'required',
        ]);
    
        $inputValue = $request->input('input');
    
        $files = [
            'name' => 'main.cpp',
            'content' => $inputValue
        ];
    
        $accessToken = '2087b5bd-61bd-4c36-96f0-030e1f84b630';
    
        $response = Http::withHeaders([
            'Authorization' => 'Token ' . $accessToken,
            'Content-type' => 'Application/json',
        ])->post('https://glot.io/api/run/cpp/latest', [
            'files' => [$files],
        ]);
    
        $outputValue = $response->json();
        $stdout = $outputValue['stdout'];
        $stderr = $outputValue['stderr'];
    
        if ($stderr == "") {
            // Menyimpan input dan output ke tabel pretest
            $pretest = Pretest::create([
                'user_id' => auth()->user()->id,
                'input' => $inputValue,
                'output' => $stdout
            ]);
    
            return response()->json(['output' => $stdout]);
        }
    
        return response()->json(['error' => 'Execution error'], 400);
    }
}