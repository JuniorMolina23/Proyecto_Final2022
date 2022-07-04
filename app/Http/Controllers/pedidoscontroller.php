<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class pedidoscontroller extends Controller
{
    public function index()
    {
        return view('admin.pedidos.pedidos');
    }
    public function aviso($celular)
    {
        $mensaje = "Esto es laravel";
        $url = "http://127.0.0.1:3000/whatsapp?celular=".$celular."&mensaje=".$mensaje;
        $response = Http:: post($url);
        return "enviado".$response;

    }
}
