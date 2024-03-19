<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Progress;


class MaterialController extends Controller
{

public function updateProgress(Request $request)
{
    $user = auth()->user(); // Sesuaikan dengan cara Anda mengelola autentikasi pengguna
    $materialId = $request->input('material_id');
    $percentage = $request->input('percentage');

    // Simpan atau perbarui kemajuan membaca pengguna
    Progress::updateOrCreate(
        ['user_id' => $user->id, 'material_id' => $materialId],
        ['percentage' => $percentage]
    );

    return response()->json(['success' => true]);
}

}
