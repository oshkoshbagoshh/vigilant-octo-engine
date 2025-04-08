<?php

namespace Database\Factories;

use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SongFactory extends Factory
{
    protected $model = Song::class;

    public function definition(): array
    {
        $tags = $this->faker->words(3);
        $status = $this->faker->randomElement(['draft', 'published', 'in process']);

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'tags' => implode(',', $tags),
            'genre' => $this->faker->word(),
            'status' => substr($status, 0, 15), // Truncate the status to 15 characters
            'image' => $this->faker->imageUrl(),
            'copyright' => $this->faker->word(),
            'release_date' => Carbon::now(),
            'file_location' => $this->faker->url(),
            'user_id' => User::factory(),
        ];
    }
}
