<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Hateful 8',
            'description' => 'lorem ipsum guren',
            'director' => 'quentin tarantino',
            'release_date' => 'June 2015',
            'background_image' => 'hateful8.jpg',
            'movie_image' => 'hateful8bg.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')

        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Wolf of wallstreet',
            'description' => 'lorem ipsum guren',
            'director' => 'martin Scorsese',
            'release_date' => 'May 2008',
            'background_image' => 'wolfenbg.jpg',
            'movie_image' => 'wolfens.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')

        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Terminator',
            'description' => 'lorem ipsum guren',
            'director' => 'james Cameron',
            'release_date' => 'January 1985',
            'background_image' => 'terminatorbg.jpg',
            'movie_image' => 'terminator.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);
    }
}
