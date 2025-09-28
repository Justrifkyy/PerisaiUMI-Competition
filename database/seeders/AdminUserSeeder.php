<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Lontara', // Ganti dengan nama Anda
            'email' => 'admin@lontara.com', // Ganti dengan email admin
            'email_verified_at' => now(), // Langsung verifikasi email
            'password' => Hash::make('password'), // Ganti 'password' dengan password yang kuat
            'is_admin' => true, // Menandai user ini sebagai admin
        ]);
    }
}
