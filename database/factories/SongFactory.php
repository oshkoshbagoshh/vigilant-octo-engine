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
            'description' => $this->faker->text(),
            'tags' => $this->faker->word(),
            'genre' => $this->faker->word(),
            'status' => $this->faker->word(),
            'image' => $this->faker->word(),
            'copyright' => $this->faker->word(),
            'release_date' => Carbon::now(),
            'file_location' => $this->faker->word(),
            'genre_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
