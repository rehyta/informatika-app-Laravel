<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => True
        ]);
        User::create([
            'name' => 'Siswa A',
            'username' => 'siswa Cewek',
            'email' => 'siswaa@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Siswa B',
            'username' => 'Siswa Cowok',
            'email' => 'siswab@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
