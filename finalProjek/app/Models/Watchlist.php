<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;
    public function watchlistToUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function movie(){
        return $this->hasMany(Movie::class);
    }

    protected $table = 'watchslists';
}
