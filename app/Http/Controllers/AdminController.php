<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Material;
use App\Models\Livecode;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view ('admin.dashboard',[
            'title'=>"Board",
        ]);
    }

    public function DataSiswa()
    {
    
        return view ('admin.siswa.dataSiswa',[
            'title'=>"Data Siswa",
            'siswa'=>User::all(),
        ]);
    }

    public function destroy(User $siswa)
    {
        $siswa->delete();
        return redirect()->route('admin.siswa.dataSiswa')->with('success', 'Siswa berhasil dihapus.');
    }


    public function DataCourse()
    {
        return view ('admin.course.dataCourse',[
            'title'=>"Data Course",
            'courses' => Course::all(),
            'materials'=> Material::all(),
            'livecode'=>Livecode::all(),
        ]);
    }

    public function HasilBelajar()
    {
        return view ('admin.hasilBelajar',[
            'title'=>"Data Hasil Belajar",
        ]);
    }

}
