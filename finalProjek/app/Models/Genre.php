<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public function genreToMovieGenre(){
        return $this->belongsToMany(MovieGenre::class);
    }

    protected $table = 'genres';
}
