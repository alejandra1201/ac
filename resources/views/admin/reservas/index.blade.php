@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    <h1>Lista de Reservas</h1>
@stop
 
@section('content')
   
<div class="card">
  <div class="card-header">
    <a  class="btn btn-secondary" href="{{route('admin.reservas.create')}}">Reservar</a> 
  </div>
 
  <div  class="card-body">
     <table  class="table table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>estado</th>
            <th>correo</th>
            <th>fechaReserva</th>
            <th>contacto</th>
            <th>descripcionReserva</th>
            <th colspan="7"></th>
        </tr>
     </thead>
 
     <tbody>
     @foreach ($reservas as $reserva)
         <tr>
             <td>{{$reserva->id}}</td>
             <td>{{$reserva->estado}}</td>
             <td>{{$reserva->correo}}</td>
             <td>{{$reserva->fechaReserva}}</td>
             <td>{{$reserva->contacto}}</td>
             <td>{{$reserva->descripcionReserva}}</td>
             <td width="10px">
                <a class="btn btn-primary btn-sm" href="{{route('admin.reservas.edit', $reserva)}}">Editar</a>
               
             </td>
             <td>
                <form action="{{route('admin.reservas.destroy', $reserva)}}" method="POST">
                    @csrf
                    @method('delete')
 
                    <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                </form>
             </td>
 
         </tr>
       @endforeach
     </tbody>
    </table>
  </div>
</div>
@stop
 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
 
@section('js')
    <script> console.log('Hi!'); </script>
@stop


