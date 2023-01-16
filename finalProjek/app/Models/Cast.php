<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    public function castToMovieCast(){
        return $this->belongsToMany(Movie::class)->using(MovieCast::class);
    }




    protected $guarded = ['id'];
    protected $table = 'casts';

}
