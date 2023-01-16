<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    use HasFactory;

    public function movieGenreToGenre(){
        return $this->belongsToMany(Genre::class);
    }

    public function movieGenreToMovie(){
        return $this->belongsToMany(Movie::class);
    }

    public $timestamps = false;
    protected $guarded = [
        'id'
    ];
    protected $table = 'movie_genres';
}
