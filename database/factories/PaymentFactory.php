<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'amount' => fake()->numberBetween(500000, 1500000),
            'payment_proof_path' => 'payments/fake_proof.jpg',
            'status' => 'Pending Verification',
            'admin_notes' => null,
        ];
    }
}
