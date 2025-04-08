<?php

namespace Database\Seeders;

use App\Models\Song;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // call UserSeeder , SongSeeder, and Genre Seeder

        $this->call([
            GenreSeeder::class,
            UserSeeder::class,
            SongSeeder::class
            ]);

    }
}
