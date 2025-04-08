<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'cover_image' => $this->faker->word(),
            'release_date' => Carbon::now(),
            'description' => $this->faker->text(),
            'copyright' => $this->faker->word(),
            'price' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'song_id' => Song::factory(),
        ];
    }
}
