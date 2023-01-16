<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function movieToMovieCast(){
        $this->belongsToMany(Cast::class);
    }

    public function movieToMovieGenre(){
        return $this->belongsToMany(MovieGenre::class);
    }

    public function movieToWatchlist(){
        return $this->belongsToMany(Watchlist::class);
    }

    protected $guarded = [
        'id'
    ];
    protected $table = 'movies';
}
