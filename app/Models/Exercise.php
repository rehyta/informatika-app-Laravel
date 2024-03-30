<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $fillable = [
        'input',
        'output',
        'compiler_result',
    ];
    // Pada model Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
