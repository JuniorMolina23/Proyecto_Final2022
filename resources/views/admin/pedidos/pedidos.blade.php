@extends('adminlte::page')
@section('title', 'Admin')
@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    <a class=" btn btn-success" href="" style="margin-bottom:20px ">Nuevo</a>
    <table id="example" class="table table-dark table-striped" >
        <thead class="thead">
        <tr>
            <th scope="col">Entrega</th>
            <th scope="col">Cliente</th>
            <th scope="col">Direccion</th>
            <th scope="col">Celular</th>
            <th scope="col">Pedido</th>
            <th scope="col">Fecha</th>
            <th scope="col">Total</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>

            <tr class="tr">
                <td>Delivery</td>
                <td>Carlos</td>
                <td>Socabaya</td>
                <td>916538434</td>
                <td>Lego</td>
                <td>12-12-2022</td>
                <td>100.00</td>
                <td><a class="btn btn-warning" href="/admin/pedidos/916538434">Enviado</a>
                    <a class="btn btn-danger" href="">Completado</a></td>
            </tr>
            <tr class="tr">
                <td>Delivery</td>
                <td>Carlos</td>
                <td>Hunter</td>
                <td>916538434</td>
                <td>Lego</td>
                <td>12-12-2022</td>
                <td>100.00</td>
                <td><a class="btn btn-warning" href="/admin/pedidos/916538434">Enviado</a>
                    <a class="btn btn-danger" href="">Completado</a></td>
            </tr>
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@stop
