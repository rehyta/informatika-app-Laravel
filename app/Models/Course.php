<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'prompt',
        'slug'
    ];
    public function material()
    {
        return $this -> hasOne(Material::class);
    }
    public function exercise()
    {
        return $this->hasOne(Exercise::class);
    }
    public function instruction()
    {
        return $this->hasOne(Instruction::class);
    }
}
