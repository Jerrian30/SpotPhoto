<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Twostudio>
 */
class TwostudioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'   => fake()->name(mt_rand(1,2)),
            'day'   => fake()->date('2024_01_20'),
            'term' => fake()->time(),
            'people' => fake()->numberBetween(1,6)
        ];
    }
}
