<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\loginclientes;

class loginclientescontroller extends Controller
{
    public function index(request $request)
    {
        $usuario =loginclientes::where('email',$request->usuario)
            ->where('password',$request->password);
        if ($usuario){
            return response([
                'mensaje'=> 'Usuario validado correctamente',
                'usuario'=> $usuario
            ]);
        }
        else
        {
            return response([
                'mensaje'=> 'Usuario o clave incorrecta'],
                401
            );
        }
    }
    public function register(request $request)
    {
        $register = new loginclientes();
        $register ->name = $request->get('name');
        $register ->email = $request->get('email');
        $register ->password = $request->get('password');
        $register -> save();
    }
}
