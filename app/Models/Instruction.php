<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal',
        'jawaban'
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
