<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vakum>
 */
class VakumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tekanan_vakum_penning_mbar' => 0.0099,
            'tekanan_vakum_pirani_mbar' => 9900,
            'waktu_operasi_detik' => $this->faker->randomFloat(0, 1, 1000),
        ];
    }
}
