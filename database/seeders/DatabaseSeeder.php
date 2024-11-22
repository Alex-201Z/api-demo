<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Client::factory(49)->create();
        Produit::factory(199)->create();
        Commande::factory(199)->create();
        }
    /**
     * Seed the application's database.
     */
}
