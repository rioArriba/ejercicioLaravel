<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('anyo'); 
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('director_id');
            $table->timestamps(); 
            $table->foreign('actor_id')->references('actor_id')->on('actor_pelicula');           
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('set null');
           
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
};
