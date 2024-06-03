<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;

class UserProgressController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'progress' => 'required|numeric|min:0|max:100',
        ]);

        // Dapatkan pengguna yang sedang login
        $user = auth()->user();

        // Simpan progres ke dalam database
        $progress = Progress::updateOrCreate(
            [
                'user_id' => $user->id,
                'course_id' => $request->course_id,
            ],
            [
                'progress' => $request->progress,
            ]
        );

        // Simpan progres ke dalam session
        $request->session()->put("progress.{$request->course_id}", $request->progress);

        return response()->json(['message' => 'Progress saved successfully', 'progress' => $progress], 200);
    }

    public function show(Request $request, $courseId)
    {
        // Dapatkan pengguna yang sedang login
        $user = auth()->user();

        // Ambil progres dari session
        $progress = $request->session()->get("progress.{$courseId}");

        // Jika tidak ada di session, ambil dari database
        if (!$progress) {
            $progress = Progress::where('user_id', $user->id)
                                    ->where('course_id', $courseId)
                                    ->first();
        }

        return response()->json(['progress' => $progress]);
    }


}
