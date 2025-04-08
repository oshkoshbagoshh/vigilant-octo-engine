<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            ['name' => 'Pop', 'description' => 'Popular music appealing to a broad audience.'],
            ['name' => 'Hip-Hop/Rap', 'description' => 'Urban music with rhythmic beats and lyrical flow.'],
            ['name' => 'Rock', 'description' => 'Classic and alternative rock with loyal fanbases.'],
            ['name' => 'Electronic/Dance (EDM)', 'description' => 'Immersive and high-energy music ideal for festivals.'],
            ['name' => 'Country', 'description' => 'Music with storytelling rooted in rural traditions.'],
            ['name' => 'R&B/Soul', 'description' => 'Relaxing and emotional music with deep melodies.'],
            ['name' => 'Latin/Reggaeton', 'description' => 'Dance-centric and globally popular Latin music.'],
            ['name' => 'Jazz', 'description' => 'Sophisticated music often associated with relaxation.'],
            ['name' => 'Classical', 'description' => 'Calming and intellectual music with orchestral arrangements.'],
            ['name' => 'Indie/Alternative', 'description' => 'Creative and unique music for niche audiences.'],
        ];

        foreach ($genres as $genreName) {
            Genre::factory()->create([
                'name' => $genreName,
            ]);
        }
    }
}
