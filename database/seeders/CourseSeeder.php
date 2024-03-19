<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => "Pengenalan Pemrograman",
            'description' => "test",
            'slug' => Str::slug("Pengenalan Pemrograman")
        ]);
        Course::create([
            'title' => "Struktur Data C++",
            'description' => "test",
            'slug' => Str::slug("Struktur Data C++")
        ]);
        Course::create([
            'title' => "Variable dan Tipe Data",
            'description' => "test",
            'slug' => Str::slug("Variable dan Tipe Data")
        ]);
    }
}
