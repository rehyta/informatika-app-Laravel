<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
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
}
