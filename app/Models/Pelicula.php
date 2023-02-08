<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    function actor() {
        $this->hasMany(Actor::class);
    }

    function director() {
        $this->hasOne(Director::class);
    }
}
