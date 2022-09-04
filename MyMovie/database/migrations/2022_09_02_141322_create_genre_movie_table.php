<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_movie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("movie_id")->nullable();
            $table->foreign("movie_id")->references("id")->on("movies")->onDelete("RESTRICT")->onUpdate("CASCADE");
            $table->unsignedBigInteger("genre_id")->nullable();
            $table->foreign("genre_id")->references("id")->on("genres")->onDelete("RESTRICT")->onUpdate("CASCADE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_movie');
    }
};
