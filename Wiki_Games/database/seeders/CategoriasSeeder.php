<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categorias')->insert([
            'categoria'=>'Accion',
            'img'=>'default.jpg',
            'slug'=>'hola'
        ]);
        DB::table('Categorias')->insert([
            'categoria'=>'Arcade',
            'img'=>'default.jpg',
            'slug'=>'hola'
        ]);
        DB::table('Categorias')->insert([
            'categoria'=>'Deportivo',
            'img'=>'default.jpg',
            'slug'=>'hola'
        ]);
        DB::table('Categorias')->insert([
            'categoria'=>'Estrategia',
            'img'=>'default.jpg',
            'slug'=>'hola'
        ]);
        DB::table('Categorias')->insert([
            'categoria'=>'Terror',
            'img'=>'default.jpg',
            'slug'=>'hola'
        ]);
        DB::table('Categorias')->insert([
            'categoria'=>'Suspenso',
            'img'=>'default.jpg',
            'slug'=>'hola'
        ]);
    }
}
