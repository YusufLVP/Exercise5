<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\GenreMovie;
use App\Models\RatingUsia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        
        Genre::factory(10)->create();
        RatingUsia::factory(5)->create();
        Movie::factory(50)->create();
        GenreMovie::factory(100)->create();
        // ]);
    }
}
