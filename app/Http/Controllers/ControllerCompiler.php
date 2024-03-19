<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use app\Models\Exercise;

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
    ])->post('https://glot.io/api/run/cpp/latest', [
        'files' => [$files],
    ]);

    // Mendapatkan nilai output dari response JSON
    $outputValue = $response->json();
    $stdout = $outputValue['stdout'];

    // Validasi apakah output yang diterima sesuai dengan yang diinginkan
    if (isset($outputValue['stdout'])) {
        // Simpan output ke dalam database
        $exercise = new Exercise([
            'input' => $inputValue,
            'output' => $stdout,
        ]);
        $exercise->save();

        // Mengirimkan output kembali sebagai respons JSON
        return response()->json(['output' => $stdout]);
    } else {
        return response()->json(['error' => 'Gagal memproses output.'], 500);
    }
}

}
