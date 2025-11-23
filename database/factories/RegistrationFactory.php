<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    public function definition()
    {
        return [
            'team_name' => fake()->company() . ' Team', // Nama Tim
            'full_name' => fake()->name(), // Ketua Tim
            // PERBAIKAN DI SINI: Ganti university() menjadi company()
            'institution' => fake()->company(),
            'position' => 'Ketua Tim',
            'phone_number' => fake()->phoneNumber(),
            'participant_type' => fake()->randomElement(['Tahap Awal', 'Tahap Berjalan']),
            'research_field' => fake()->randomElement(['Teknologi Pangan', 'Energi Terbarukan', 'IoT', 'Limbah']),

            // Path File Dummy
            'ktm_path' => 'identities/fake_ktm.pdf',
            'share_pamflet_path' => 'proofs/fake_share.jpg',
            'twibbon_path' => 'proofs/fake_twibbon.jpg',
            'follow_medsos_path' => 'proofs/fake_follow.jpg',
            'bmc_path' => 'submissions/fake_bmc.pdf',
            'proposal_path' => 'submissions/fake_proposal.pdf',

            'package_choice' => 'Lomba & Expo',
            'is_present' => true,
            'agree_terms' => true,
        ];
    }
}
