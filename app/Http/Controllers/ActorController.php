<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Actor extends Controller
{
    public function __construct(){
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
    }
   
    public function index()
    {
        // $libros = Libro::where('precio', '<', 10)->where('precio', '>', 5)->get();
        // $libros = Libro::orderBy('titulo','DESC')->get();
        // $libros = Libro::paginate(5);
        // $libros = Libro::orderByAsc('titulo')
        //     ->orderByAsc('editorial')
        //     ->paginate(5);
        // $libro = Libro::find($id); //puede dar error
        // $libro = Libro::findOrFail($id); //este no
    }

    
    public function store(Request $request)
    {
        //
    }
   
    public function show($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        
        // $libroAModificar = Libro::findOrFail($id);
        // $libroAModificar->titulo="Otro título";
        // $libroAModificar->save();
    }

    public function destroy($id)
    {
        //
    }
}
