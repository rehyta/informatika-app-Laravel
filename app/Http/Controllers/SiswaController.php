<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $dataSiswa = User::all();
        return view('admin.siswa.dataSiswa', [
            'title' => "Data Siswa",
            'siswa'=>User::all(),
        compact('dataSiswa')]);
    }
    
    public function destroy(User $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = User::findOrFail($id);
        return view('admin.siswa.edit', [
            'title' => "Halaman edit",
            'siswa' => $siswa
        ]);
    }
    

    public function update(Request $request, User $siswa)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);
        
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

}
