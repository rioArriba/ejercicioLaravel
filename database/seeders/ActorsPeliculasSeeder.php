<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Pelicula;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActorsPeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peliculas = Pelicula::all();

        // Populate the pivot table
        Actor::all()->each(function ($actor) use ($peliculas) { 
            $actor->pelicula()->attach(
                $peliculas->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
