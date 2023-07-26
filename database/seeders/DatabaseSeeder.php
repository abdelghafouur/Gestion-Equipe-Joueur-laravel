<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
         Equipe::factory(5)->create();
         Joueur::factory(30)->create();
        \App\Models\User::factory()->create([
            'name' => 'Abdelghafouur',
            'email' => 'abdelghafourlahnida@gmail.com',
            'password' => Hash::make("123")
        ]);
    }
}
