@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    <h1>Comentarios</h1>
@stop
 
@section('content')
   
<div class="card">
  <div class="card-header">
    <a  class="btn btn-secondary" href="{{route('admin.comentarios.create')}}">Agregar Comentario</a> 
  </div>
 
  <div  class="card-body">
     <table  class="table table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>Mensaje</th>
            <th colspan="4"></th>
        </tr>
     </thead>
 
     <tbody>
     @foreach ($sitiosArray as $sitios)
         <tr>
             {{-- <td>{{$comentario->id}}</td> --}}
             <td>{{$sitios->['municipio']}}</td>
             <td width="10px">

             
                <a class="btn btn-primary btn-sm" href="{{route('admin.comentarios.edit', $comentario)}}">Editar</a>
               
             </td>
             <td>
                <form action="{{route('admin.comentarios.destroy', $comentario)}}" method="POST">
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


