<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pendaftaran Buka: 10 Desember 2025 (Sesuai Guidebook Hal 7)
        Setting::updateOrCreate(['key' => 'registration_opens_date'], ['value' => '2025-12-10']);

        // Pendaftaran Tutup: 30 Desember 2025 (Sesuai Guidebook Hal 7)
        Setting::updateOrCreate(['key' => 'registration_closes_date'], ['value' => '2025-12-30']);

        // Deadline Submission: Disamakan dengan tutup pendaftaran
        Setting::updateOrCreate(['key' => 'submission_deadline_date'], ['value' => '2025-12-30']);

        // Tanggal Acara Mulai (Presentasi & Expo): 12 Januari 2026
        Setting::updateOrCreate(['key' => 'conference_starts_date'], ['value' => '2026-01-12']);

        // Tanggal Acara Selesai (Awarding): 14 Januari 2026
        Setting::updateOrCreate(['key' => 'conference_ends_date'], ['value' => '2026-01-14']);
    }
}
