<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Registration;
use App\Models\Payment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Panggil Seeder Setting (Agar halaman depan tidak error)
        $this->call(SettingSeeder::class);

        // 2. Buat Akun ADMIN
        User::factory()->create([
            'name' => 'Admin Lontara',
            'email' => 'admin@lontara.com',
            'password' => bcrypt('password'),
            'role' => 1, // Role 1 = Admin
        ]);

        // 3. Buat Akun JURI (3 Orang)
        $juris = [
            ['name' => 'Dr. Budi Santoso', 'email' => 'juri1@lontara.com'],
            ['name' => 'Prof. Rina Wijaya', 'email' => 'juri2@lontara.com'],
            ['name' => 'Ahmad Dhani, M.T.', 'email' => 'juri3@lontara.com'],
        ];

        foreach ($juris as $juriData) {
            User::factory()->create([
                'name' => $juriData['name'],
                'email' => $juriData['email'],
                'password' => bcrypt('password'),
                'role' => 2, // Role 2 = Juri
            ]);
        }

        // 4. Buat Akun PESERTA TIM (Dummy Data)

        // Tim A: Sudah Bayar (Lunas) & Siap Dinilai
        User::factory()
            ->has(
                Registration::factory()
                    ->state(['team_name' => 'Tim Garuda Muda', 'participant_type' => 'Tahap Awal'])
                    ->has(Payment::factory()->state(['status' => 'Verified']))
            )
            ->create([
                'name' => 'Ketua Tim A',
                'email' => 'tim.a@gmail.com',
                'password' => bcrypt('password'),
                'role' => 0, // Role 0 = Peserta
            ]);

        // Tim B: Belum Bayar (Pending)
        User::factory()
            ->has(
                Registration::factory()
                    ->state(['team_name' => 'Tim Inovasi Hijau', 'participant_type' => 'Tahap Berjalan'])
                    ->has(Payment::factory()->state(['status' => 'Pending Verification']))
            )
            ->create([
                'name' => 'Ketua Tim B',
                'email' => 'tim.b@gmail.com',
                'password' => bcrypt('password'),
                'role' => 0,
            ]);

        // Tim C: Baru Daftar Akun (Belum isi form registrasi)
        User::factory()->create([
            'name' => 'Ketua Tim C',
            'email' => 'tim.c@gmail.com',
            'password' => bcrypt('password'),
            'role' => 0,
        ]);
    }
}
