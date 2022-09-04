<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\RatingUsia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            // 'genre_id' => Genre::all()->random()->id,
            'rating_usia_id' => RatingUsia::all()->random()->id,
            'negara' => $this->faker->country(),
            'sutradara' => $this->faker->name(),
            'studio' => $this->faker->company(),
            'durasi' => $this->faker->numberBetween(100,300),
            'rate' => $this->faker->randomDigitNotNull(),
            'rilis' => $this->faker->date(),
            'sinopsis' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'poster' => ''
        ];
    }
}
