<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        {
            return [
                'id_client' => fake()->randomElement(\App\Models\Client::pluck('id')->toArray()),
                'id_produit' => fake()->randomElement(\App\Models\Produit::pluck('id')->toArray()),
                'quantite' => fake()->numberBetween(1, 100),
                'date' => fake()->date(),
            ];
        }
    }
}
