<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('genres')->insert([
            'genre' => 'Animation',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);
        //2
        DB::table('genres')->insert([
            'genre' => 'Comedy',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);
        //3
        DB::table('genres')->insert([
            'genre' => 'Anime',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('genres')->insert([
            'genre' => 'Crime',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('genres')->insert([
            'genre' => 'Drama',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('genres')->insert([
            'genre' => 'Family',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('genres')->insert([
            'genre' => 'Fantasy',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('genres')->insert([
            'genre' => 'History',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('genres')->insert([
            'genre' => 'Horror',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);
    }
}
