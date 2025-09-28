<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'authors' => fake()->name() . ', ' . fake()->name(),
            'topic' => fake()->word(),
            'paper_path' => 'papers/fake_paper.pdf',
            'status' => 'Submitted',
        ];
    }
}
