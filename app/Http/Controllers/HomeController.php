<?php

namespace App\Http\Controllers;

use App\Models\productos;
use http\Env\Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = productos::ALL();
        return view('admin.producto.productos')->with('productos',$productos);
    }
    public function detalles($id)
    {
        $producto = productos::find($id);
        return view('productoscliente.detalleproductos')->with('producto',$producto);
    }

}
