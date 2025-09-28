<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => fake()->name(),
            'institution' => fake()->company(),
            'position' => fake()->jobTitle(),
            'phone_number' => fake()->phoneNumber(),
            'participant_type' => fake()->randomElement(['Presenter', 'Participant']),
            'research_field' => fake()->sentence(3),
            'identity_card_path' => 'identities/fake_id.pdf',
            'cv_path' => 'cvs/fake_cv.pdf',
            'package_choice' => fake()->randomElement(['Hanya Seminar', 'Seminar + Workshop']),
            'is_present' => true,
            'agree_terms' => true,
        ];
    }
}
