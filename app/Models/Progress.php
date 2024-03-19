<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', // ID pengguna
        'course_id', // ID course
        'percentage', // Persentase selesai
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model Course (jika ada)
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
