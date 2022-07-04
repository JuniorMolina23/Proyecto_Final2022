@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div>
        <label for="">Inversion de Productos</label>
        <input type="text" value="{{$inversion[0]}}" disabled>
    </div>
    <div>
        <label for="">Producto con costo minimo</label>
        <input type="text" value="{{$inversion[1]}} : {{$inversion[2]}}" disabled>
    </div>
    <div>
        <label for="">Producto con costo maximo</label>
        <input type="text" value="{{$inversion[3]}} : {{$inversion[4]}}" disabled>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
