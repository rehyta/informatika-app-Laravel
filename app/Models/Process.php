<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'course_id', 
        'material_id',
        'livecode_id', 
        'material_status', 
        'livecode_status', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model Course (jika ada)
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function livecode()
    {
        return $this->belongsTo(Livecode::class);
    }
}
