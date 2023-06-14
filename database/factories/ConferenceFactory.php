<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_id' => rand(1, 2),
            'title' => $this->faker->sentence(rand(1, 3)),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'location' => $this->faker->city(),
            'link' => $this->faker->url(),
            'description' =>  $this->faker->text(200),
        ];
    }
}
