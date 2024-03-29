<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Optic>
 */
class OpticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'arus_pemayar' => $this->faker->randomFloat(2, 0, 1),
            'arus_pemfokus' => $this->faker->randomFloat(2, 0, 1),
            'tegangan_pemayar' => $this->faker->randomFloat(2, 0, 4),
            'tegangan_pemfokus' => $this->faker->randomFloat(2, 0, 10),
        ];
    }
}
