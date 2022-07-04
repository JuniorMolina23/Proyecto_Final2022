@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')
    <a href="/admin/categorias/create" type="button" class="btn btn-success">Añadir Categoria</a>
    <hr>
    <table id="example" class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categorias)
            <tr>
                <td>{{$categorias->nombre}}</td>
                <td>{{$categorias->descripcion}}</td>
                <td><a href="categorias/{{$categorias->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    <a href="categorias/delete/{{$categorias->_id}}" type="button" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
