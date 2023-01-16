<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieWatchlist extends Model
{
    use HasFactory;

    public function movieWatchlistToMovie(){
        return $this->belongsToMany(Movie::class,'id','movie_id');
    }

    protected $table = 'movie_watchlists';
}
