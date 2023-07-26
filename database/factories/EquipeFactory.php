<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
 */
class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomEquipe' => $this->faker->unique()->word(),
            'championnat' => $this->faker->word(),
            'nombreTrophe' => $this->faker->numberBetween(1, 20),
        ];
    }
}
