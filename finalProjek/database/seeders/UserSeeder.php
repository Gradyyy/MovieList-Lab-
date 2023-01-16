<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => 'Admin',
            'email' => 'administrator@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'DOB' => '23-1-2002',
            'phone_number' => '08128161181'
        ]);

        // DB::table('users')->insert([
        //     'name' => 'smth',
        //     'username' => 'Ryoer',
        //     'email' => 'ryo.habanero@gmail.com',
        //     'password' => bcrypt('ryoed'),
        // ]);
    }
}
