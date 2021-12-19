<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->sentences(4, true),
            'user_id' => $this->faker->numberBetween(1, 50),
            'category_id' => $this->faker->numberBetween(1, 50),
            'is_published' => $this->faker->boolean(70),
        ];
    }
}
