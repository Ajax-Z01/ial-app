<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(1, 3));
        $subtitle = $this->faker->sentence(rand(2, 4));
        return [
            'author_id' => rand(1, 10),
            'title' => $title,
            'subtitle' => $subtitle,
            'slug' => Str::slug($title),
            'description' =>  $this->faker->text(1000)
        ];
    }
}
