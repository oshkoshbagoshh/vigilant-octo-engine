<?php

namespace Database\Seeders;

use App\Models\Song;
use App\Models\User;
use App\Models\Genre;
use App\Models\Album;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run()
    {
        // Create some persistent songs
        $persistentSongs = [
            [
                'filename' => 'song1.mp3',
                'title' => 'Song 1',
                'user_id' => User::where('email', 'john@example.com')->first()->id,
                'genre_id' => Genre::where('name', 'Rock')->first()->id,
                'album_id' => Album::where('name', 'Album 1')->first()->id,
            ],
            [
                'filename' => 'song2.mp3',
                'title' => 'Song 2',
                'user_id' => User::where('email', 'jane@example.com')->first()->id,
                'genre_id' => Genre::where('name', 'Pop')->first()->id,
                'album_id' => Album::where('name', 'Album 2')->first()->id,
            ],
        ];

        foreach ($persistentSongs as $songData) {
            Song::updateOrCreate(
                ['filename' => $songData['filename']],
                $songData
            );
        }

        // Create additional random songs
        $users = User::all();
        $genres = Genre::all();
        $albums = Album::all();

        Song::factory()->count(48)
            ->for($users->random())
            ->for($genres->random())
            ->for($albums->random())
            ->create();
    }
}
