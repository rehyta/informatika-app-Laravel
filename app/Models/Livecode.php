<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livecode extends Model
{
    use HasFactory;
    protected $fillable = [
        'input',
        'output',
        'course_id',
        'user_id'
    ];
    // Pada model Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
