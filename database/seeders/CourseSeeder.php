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
            'title' => "Pengenalan Bahasa Pemrograman",
            'prompt' => "kita akan mengenali apa itu bahasa pemrograman",
            'slug' => Str::slug("Pengenalan Pemrograman"),
        ]);

        Course::create([
            'title' => "Struktur Data C++",
            'prompt' => "kita akan mempelajari bagaimana struktur dasar C++",
            'slug' => Str::slug("Struktur Data C++"),
        ]);

        Course::create([
            'title' => "Variable dan Tipe Data",
            'prompt' => "kita akan mempelajari bagaimana membuat variable menyesuaikan tipe data dalam bahasa pemrograman",
            'slug' => Str::slug("Variable dan Tipe Data"),
        ]);

        Course::create([
            'title' => "Operator dan Aritmatika",
            'prompt' => "kita akan mempelajari bagaimana penggunaan operator dan aritmatika dalam bahasa pemrograman",
            'slug' => Str::slug("Operator dan Aritmatika"),
        ]);

        Course::create([
            'title' => "Kondisi dan Percabangan",
            'prompt' => "kita akan mempelajari bagaimana menerapkan kondisi dan percabangan dalam program",
            'slug' => Str::slug("Kondisi dan Percabangan"),
        ]);
    }
}
