<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SongFactory extends Factory
{
    protected $model = Song::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'artist' => $this->faker->word(),
            'description' => $this->faker->text(),
            'image_url' => $this->faker->imageUrl(),
            'audio_url' => $this->faker->url(),
            'released_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
