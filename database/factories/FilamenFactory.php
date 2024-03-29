<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filamen>
 */
class FilamenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'arus_filamen' => $this->faker->randomFloat(2, 0, 12),
            'tegangan_potensio' => $this->faker->randomFloat(2, 0, 1),
            'register' => $this->faker->randomFloat(0, 30000, 40000),
            'operator' => 'Rifqi',
            'waktu_operasi_detik' => $this->faker->randomFloat(0, 0, 1000),
        ];
    }
}
