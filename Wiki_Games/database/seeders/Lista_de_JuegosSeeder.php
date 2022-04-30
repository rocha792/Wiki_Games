<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Lista_de_JuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lista_de_juegos')->insert([
            'nombre'=>'Genshin Impact',
            'genero'=>'Accion',
            'desarrollador'=>'HOYOVERSO',
            'img'=>'defailt.jpg'
        ]);
        DB::table('Lista_de_Juegos')->insert([
            'nombre'=>'Darck Souls',
            'genero'=>'Accion',
            'desarrollador'=>'Banday',
            'img'=>'defailt.jpg'
        ]);
        DB::table('Lista_de_Juegos')->insert([
            'nombre'=>'Super Mario World',
            'genero'=>'Aventura',
            'desarrollador'=>'Nintendo',
            'img'=>'defailt.jpg'
        ]);
    }
}
