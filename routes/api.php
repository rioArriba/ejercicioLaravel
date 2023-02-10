<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\PeliculaController;

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
Route::get('/',function () { return response()->json('Bienvenido', 200);});


Route::apiResource('peliculas', PeliculaController::class);
Route::apiResource('actors', ActorController::class);
Route::apiResource('directors', DirectorController::class);
Route::post('login',[ UsuarioController::class, 'login']);


