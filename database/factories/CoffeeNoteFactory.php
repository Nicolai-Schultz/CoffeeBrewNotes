<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CoffeeNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grind_size' => $this->faker->randomElement(['Fine', 'Medium', 'Coarse']),
            'bean' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 10, 30), // amount in grams
            'brew_time' => $this->faker->numberBetween(120, 600), // brew time in seconds
            'notes' => $this->faker->sentence(),
        ];
    }
}
