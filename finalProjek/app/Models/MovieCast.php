<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    use HasFactory;

    public function movieCastToMovie(){
        return $this->belongsToMany(Movie::class);
    }

    public function movieCastToCast(){
        return $this->belongsToMany(Cast::class);
    }

    public function movieWatchlistToWatchlist(){
        return $this->belongsToMany(Watchlist::class);
    }



    public $timestamps = false;

    protected $guarded = [
        'id'
    ];
    protected $table = 'movie_casts';
}
