<?php

namespace Database\Factories;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joueur>
 */
class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->firstName(),
            'prenom' => fake()->lastName(),
            'numero' => fake()->numberBetween(1, 99),
            'position' => fake()->randomElement(["millieu", "attaquant", "defense", 'gardien']),
            'anneeNaissance' => fake()->numberBetween(1990, 2004),
            'nationnalite' => fake()->country(),
            'equipe_id' => Equipe::all()->random()->id
        ];
    }
}
