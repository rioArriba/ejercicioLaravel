<?php

use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('peliculas', Pelicula::class);
Route::apiResource('actors', Pelicula::class);
Route::apiResource('directors', Pelicula::class);
Route::post('login',[ Usuario::class, 'login']);


