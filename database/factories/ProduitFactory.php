<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                    'nom' => fake()->word(),
                    'description' => fake()->sentence(),
                    'lien_image' => fake()->imageUrl('h􀆩ps://picsum.photos/seed/'.fake()->numerify().'/150/200'),
                    'prix' => fake()->randomFloat(2, 5, 500),
                    'tva' => fake()->randomFloat(2, 0, 20),
        ];
    }

}
