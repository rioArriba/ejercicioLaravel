<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$peliculas = Pelicula::where('duracion', '<' , 111 )->get();
        // $peliculas = Pelicula::orderBy('precio', 'DESC')->get();
        //return Pelicula::get();
        return  response()->json(Pelicula::get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->year = $request->year;
        $pelicula->save();
            
            return response()->json($pelicula, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        return response()->json($pelicula, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula->titulo = $request->titulo;
        $pelicula->year = $request->year;
        $pelicula->save();
        return response()->json($pelicula, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return response()->json($pelicula, 204);
    }
}
