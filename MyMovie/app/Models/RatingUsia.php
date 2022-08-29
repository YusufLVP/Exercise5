<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingUsia extends Model
{
    use HasFactory;
    protected $table="rating_usias";
    protected $fillable=['simbol','deskripsi'];

    public function usia(){
        return $this->hasMany(Movie::class);
    }
}
