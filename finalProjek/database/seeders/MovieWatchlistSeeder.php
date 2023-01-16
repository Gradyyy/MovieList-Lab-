<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieWatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movie_watchlists')->insert([
            'user_id' => 1,
            'movie_id' => 1,
            'status' => 'planning'
        ]);

        DB::table('movie_watchlists')->insert([
            'user_id' => 1,
            'movie_id' => 2,
            'status' => 'planning'
        ]);
    }
}
