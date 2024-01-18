<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Threestudio>
 */
class ThreestudioFactory extends Factory
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
            'day'   => fake()->date(),
            'term' => fake()->time(),
            'studio' => fake()->numberBetween(1,3),
            'people' => fake()->numberBetween(1,6)
        ];
    }
}
