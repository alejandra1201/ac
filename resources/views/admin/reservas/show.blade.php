@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Reservas</h1>
@stop

@section('content')
    
<h1>Hola desde Show  {{$reserva}}</h1>



<form action="{{route('admin.reservas.destroy',$reserva)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop