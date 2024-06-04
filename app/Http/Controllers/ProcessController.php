<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Process;

class ProcessController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.courses', [
            'title' => "Data Siswa",
            ]);
    }

    public function materiDone($id)
    {

        $process = Process::find($id);

        if($process){
            $process->material_status = true;
            $process->save();

            return redirect('/course')->with('success', 'Material status updated successfully.');
        }
        return redirect('/course')->with('error', 'Process not found.');
    }

    public function markMaterialDone($id)
    {
        // Temukan process berdasarkan ID
        $process = Process::find($id);

        if ($process) {
            // Ubah status material menjadi true (1)
            $process->material_status = true;
            $process->save();

            return redirect('/course')->with('success', 'Material status updated successfully.');
        }

        return redirect('/course')->with('error', 'Process not found.');
    }
}
