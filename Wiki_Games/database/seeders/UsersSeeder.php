<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'name'=>'Edgar',
            'email'=>'Admin1@gmail.com',
            'password'=> Hash::make('12345'),
            'telefono'=>'6361234567',
            'alias'=>'Rochin',
            'img'=>'default.jpg'
        ]);
        DB::table('Users')->insert([
            'name'=>'Andrea',
            'email'=>'Admin2@gmail.com',
            'password'=> Hash::make('1379'),
            'telefono'=>'6361000120',
            'alias'=>'Andrelia',
            'img'=>'default.jpg'
        ]);
    }
}
