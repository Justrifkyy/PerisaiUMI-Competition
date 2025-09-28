<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Registration;
use App\Models\Submission;
use App\Models\Payment;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Rifky - Presenter, Lunas, Paper Diterima
        User::factory()->has(
            Registration::factory()
                ->has(Payment::factory()->state(['status' => 'Verified']))
                ->state(['participant_type' => 'Presenter'])
        )->has(
            Submission::factory()->state(['status' => 'Accepted'])
        )->create([
            'name' => 'Rifky',
            'email' => 'rifky020504@gmail.com',
        ]);

        // 2. Budi - Peserta, Belum Lunas
        User::factory()->has(
            Registration::factory()
                ->has(Payment::factory()->state(['status' => 'Pending Verification']))
                ->state(['participant_type' => 'Participant'])
        )->create([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@example.com',
        ]);

        // 3. Citra - Presenter, Belum Lunas, Paper Submitted
        User::factory()->has(
            Registration::factory()
                ->has(Payment::factory()->state(['status' => 'Pending Verification']))
                ->state(['participant_type' => 'Presenter'])
        )->has(
            Submission::factory()->state(['status' => 'Submitted'])
        )->create([
            'name' => 'Citra Lestari',
            'email' => 'citra.lestari@example.com',
        ]);

        // 4. Dewi - Peserta, Lunas
        User::factory()->has(
            Registration::factory()
                ->has(Payment::factory()->state(['status' => 'Verified']))
                ->state(['participant_type' => 'Participant'])
        )->create([
            'name' => 'Dewi Anggraini',
            'email' => 'dewi.anggraini@example.com',
        ]);
    }
}
