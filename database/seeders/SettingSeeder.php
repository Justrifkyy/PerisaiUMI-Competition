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
        Setting::updateOrCreate(['key' => 'registration_opens_date'], ['value' => '2025-10-01']);
        Setting::updateOrCreate(['key' => 'registration_closes_date'], ['value' => '2025-11-30']);
        Setting::updateOrCreate(['key' => 'submission_deadline_date'], ['value' => '2025-11-10']);
        Setting::updateOrCreate(['key' => 'conference_starts_date'], ['value' => '2025-11-29']);
        Setting::updateOrCreate(['key' => 'conference_ends_date'], ['value' => '2025-12-01']);
    }
}
