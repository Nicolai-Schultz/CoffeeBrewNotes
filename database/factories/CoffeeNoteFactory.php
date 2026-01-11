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
            'type' => $this->faker->randomElement(['Espresso', 'Pour Over', 'French Press', 'Cold Brew']),
            'bean' => $this->faker->word(),
            'grind_size' => $this->faker->randomElement(['Fine', 'Medium', 'Coarse']),
            'amount' => $this->faker->randomFloat(2, 10, 30), // amount in grams
            'preparation_steps' => $this->faker->sentence(),
            'notes' => $this->faker->sentence(),
        ];
    }
}
