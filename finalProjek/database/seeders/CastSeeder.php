<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('casts')->insert([
            'name' => 'Sam L Jackson',
            'gender' => 'Male',
            'biography' => 'lorem ipsum',
            'DOB' => '27 April 1965',
            'place_of_birth' => 'kansas',
            'cast_image' => 'sam l jackson.jpg',
            'popularity' => '99',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('casts')->insert([
            'name' => 'Leonardo Dicaprio',
            'gender' => 'Male',
            'biography' => 'lorem ipsum',
            'DOB' => '27 May 1970',
            'place_of_birth' => 'texas',
            'cast_image' => 'leonardodicaprio.jpg',
            'popularity' => '80',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);

        DB::table('casts')->insert([
            'name' => 'Emilia Clarke',
            'gender' => 'Female',
            'biography' => 'lorem ipsum',
            'DOB' => '5 October 1985',
            'place_of_birth' => 'Washington D.C',
            'cast_image' => 'emilia clarke.jpg',
            'popularity' => '75',
            'created_at' => Carbon::now()->format('Y:m:d H:i:s'),
			'updated_at' => Carbon::now()->format('Y:m:d H:i:s')
        ]);
    }
}
