<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable=['judul','genre_id','rating_usia_id','negara','sutradara','studio','durasi','rate','rilis','sinopsis'];

    public function RatingUsia(){
        return $this->belongsTo(RatingUsia::class);
    }
    public function Genre(){
        return $this->belongsTo(Genre::class);
    }
}
