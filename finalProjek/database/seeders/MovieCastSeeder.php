<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieCastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movie_casts')->insert([
            'movie_id' => 1,
            'cast_id' => 1,
            'character_name' => 'Major Marquis Warren'
        ]);

        DB::table('movie_casts')->insert([
            'movie_id' => 1,
            'cast_id' => 3,
            'character_name' => 'robinet'
        ]);

        DB::table('movie_casts')->insert([
            'movie_id' => 2,
            'cast_id' => 1,
            'character_name' => 'leonardo'
        ]);

    }
}
