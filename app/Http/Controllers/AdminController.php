<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Material;
use App\Models\Livecode;
use App\Models\Process;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $this->authorize('admin');

        return view ('admin.dashboard',[
            'title'=>"Board",
        ]);
    }

    public function DataSiswa()
    {
    
        $this->authorize('admin');

        return view ('admin.siswa.dataSiswa',[
            'title'=>"Data Siswa",
            'siswa'=>User::all(),
        ]);
    }

    public function destroy(User $siswa)
    {
        $this->authorize('admin');

        $siswa->delete();
        return redirect()->route('admin.siswa.dataSiswa')->with('success', 'Siswa berhasil dihapus.');
    }


    public function DataCourse(Request $request)
    {
        $this->authorize('admin');

    
        return view ('admin.course.dataCourse',[
            'title'=>"Data Course",
            'courses' => Course::all(),
            'materials'=> Material::all(),
            'livecode'=>Livecode::all(),
        ]);
    }

    public function HasilBelajar()
    {
        $this->authorize('admin');

        $progress = Course::leftJoin('processes', function($join) {
                $join->on('courses.id', '=', 'processes.course_id');
            })
            ->leftJoin('users', function($join) {
                $join->on('processes.user_id', '=', 'users.id');
            })
            ->select('users.name', 'courses.*', 'processes.material_status', 'processes.livecode_status')
            ->get();
        


    
        $title = 'hasil belajar';

    
        return view ('admin.hasilBelajar',compact('title','progress'));
    }

}
