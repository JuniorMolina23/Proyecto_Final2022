<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::post('/login/cliente', [App\Http\Controllers\loginclientescontroller::class, 'index']);
Route::post('/login/register', [App\Http\Controllers\loginclientescontroller::class, 'register']);

Route::get('/vueproducto', [App\Http\Controllers\vuecontroller::class, 'vueProducto']);
Route::get('/vueperfil', [App\Http\Controllers\vuecontroller::class, 'vueperfil']);
Route::get('/vuecategorias', [App\Http\Controllers\vuecontroller::class, 'vuecategorias']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}/detalleproductos', [App\Http\Controllers\HomeController::class, 'detalles']);
Route::get('/home/{id}/carrito', [App\Http\Controllers\carritocontroller::class, 'index']);

Route::get('/home/{id}/perfilcliente', [App\Http\Controllers\perfilcliente::class, 'index']);
Route::post('/home/{id}/modify', [App\Http\Controllers\perfilcliente::class, 'modify']);







Route::get('/admin/producto', [App\Http\Controllers\modificarproductoscontroller::class, 'index']);
Route::get('/admin/producto/create', [App\Http\Controllers\modificarproductoscontroller::class, 'create']);
Route::post('/admin/producto/insert', [App\Http\Controllers\modificarproductoscontroller::class, 'insert']);
Route::get('/admin/producto/{id}/editar', [App\Http\Controllers\modificarproductoscontroller::class, 'modify']);
Route::post('/admin/producto/editar/{id}', [App\Http\Controllers\modificarproductoscontroller::class, 'update']);
Route::get('/admin/producto/{id}/delete', [App\Http\Controllers\modificarproductoscontroller::class, 'delete']);
Route::get('/prueba', [App\Http\Controllers\modificarproductoscontroller::class, 'api']);

Route::get('/admin/categorias', [App\Http\Controllers\categoriaController::class, 'index']);
Route::get('/admin/categorias/create', [App\Http\Controllers\categoriaController::class, 'create']);
Route::post('/admin/categorias/insert', [App\Http\Controllers\categoriaController::class, 'insert']);
Route::get('/admin/categorias/{id}/edit', [App\Http\Controllers\categoriaController::class, 'edit']);
Route::post('/admin/categorias/update/{id}', [App\Http\Controllers\categoriaController::class, 'update']);
Route::get('/admin/categorias/delete/{id}', [App\Http\Controllers\categoriaController::class, 'delete']);

Route::get('/admin/pedidos', [App\Http\Controllers\pedidoscontroller::class, 'index']);
Route::get('/admin/pedidos/{celular}', [App\Http\Controllers\pedidoscontroller::class, 'aviso']);

Route::get('/admin/administracion', [App\Http\Controllers\administracioncontroller::class, 'index']);
Route::get('/admin/administracion/min', [App\Http\Controllers\administracioncontroller::class, 'min']);

