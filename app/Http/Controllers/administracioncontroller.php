<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class administracioncontroller extends Controller
{
    public function index()
    {
        $url ='http://127.0.0.1:3000/datos';
        $response = Http::get($url);
        return view('admin.administracion.inversion')->with('inversion',$response);
    }

}
