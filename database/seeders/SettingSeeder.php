<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Tanggal Acara Mulai (Presentasi & Expo)
        Setting::updateOrCreate(['key' => 'conference_starts_date'], ['value' => '2026-01-06 23:59:00']);
    }
}
