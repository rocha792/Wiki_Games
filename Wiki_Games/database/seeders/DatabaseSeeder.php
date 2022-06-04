<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->truncateTables([
            //'users'
        //]);
        $this->call(UsersSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(Lista_de_JuegosSeeder::class);
        $this->call(ContenidoSeeder::class);
        $this->call(Info_JuegosSeeder::Class);
    }
}
