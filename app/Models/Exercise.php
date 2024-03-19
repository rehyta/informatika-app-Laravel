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
    ];
    // Pada model Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
