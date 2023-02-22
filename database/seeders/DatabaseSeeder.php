<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActorSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PeliculaSeeder::class);
        $this->call(ActorsPeliculasSeeder::class);


    }
}
