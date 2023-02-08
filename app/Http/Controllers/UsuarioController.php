<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    
    public function login(Request $request) {
        
        $usuario = Usuario::where('login', $request->login)->first();
        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            return response()->json(['token' => $usuario->createToken($usuario->login)->plainTextToken]);
        }
    }
}
