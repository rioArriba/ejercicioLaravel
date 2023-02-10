<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    
    public function index()
    {
        return  response()->json(Director::get(), 200);
    }

    
    public function store(Request $request)
    {
        $director = new Director();
        $director->nombre = $request->nombre;
        //$director->director()->associate(Director::findOrFail($request->director_id));
        $director->save();
        return response()->json($director, 201);
    }

    
    public function show(Director $director)
    {
        return response()->json($director, 200);
    }

    
    public function update(Request $request, Director $director)
    {
        $director->titulo = $request->titulo;
        $director->anyo = $request->anyo;
        $director->save();
        return response()->json($director, 201);
        // $libroAModificar = Libro::findOrFail($id);
        // $libroAModificar->titulo="Otro título";
        // $libroAModificar->save();
    }

    
    public function destroy(Director $director)
    {
        $director->delete();
        return response()->json($director, 204);
    }
}
