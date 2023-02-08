<?php

namespace App\Models;

use App\Models\Actor;
use App\Models\Director;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelicula extends Model
{
    use HasFactory;

    function actor() {
        $this->belongsToMany(Actor::class);
    }

    function director() {
        $this->belongsTo(Director::class);
    }
}
