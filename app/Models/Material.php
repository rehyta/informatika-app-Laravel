<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'slug',
    ];
    // Pada model Material
    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class)->withPivot('is_read')->withTimestamps();
    // }

}
