<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use MiNamespace\DTO\ActorDTO;
use App\Http\Requests\ActorPost;
use MiNamespace\Service\ActorService;
use MiNamespace\factories\ActorFactory;

class ActorController extends Controller
{


    public function __construct(){
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
    }
   
    public function index()
    {

        return  response()->json(ActorFactory::getService()::read(), 200);
        // $libros = Libro::where('precio', '<', 10)->where('precio', '>', 5)->get();
        // $libros = Libro::orderBy('titulo','DESC')->get();
        // $libros = Libro::paginate(5);
        // $libros = Libro::orderByAsc('titulo')
        //     ->orderByAsc('editorial')
        //     ->paginate(5);
        // $libro = Libro::find($id); //puede dar error
        // $libro = Libro::findOrFail($id); //este no
    }

    
    public function store(ActorPost $request)
    {
        $actor = new Actor();
        $actor->nombre = $request->nombre;
        //$actor->director()->associate(Director::findOrFail($request->director_id))
        $actor->save();
            
            return response()->json($actor, 201);
    }
   
    public function show(int $id)
    {
         return  response()->json(ActorFactory::getService()::find($id), 200);
       // return response()->json($actor, 200);
    }

   
    public function update(ActorPost $request, int $id)
    {
        $result = new ActorDTO(
            $id,
            $request->nombre     
        );
        return ActorFactory::getService()::update($result);

        // $actor->titulo = $request->titulo;
        // $actor->year = $request->year;
        // $actor->save();
        
        // return response()->json($actor, 201);
        // $libroAModificar = Libro::findOrFail($id);
        // $libroAModificar->titulo="Otro título";
        // $libroAModificar->save();
    }

    public function destroy(int $id)
    {
        $actor->delete();
        return response()->json($actor, 204);
    }
}
