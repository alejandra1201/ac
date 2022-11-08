@extends('adminlte::page')
@section('title', 'Aventura Caucana')

@section('content_header')
    <h1>Lista de servicios</h1>
@stop

@section('content')
   
<div class="card">
  <div class="card-header">
      <a  class="btn btn-secondary" href="{{route('admin.servicios.create')}}">Agregar Servicio</a> 
  </div>

  <div  class="card-body">
     <table  class="table table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>Nombre servicio</th>
            <th>valor servicio</th>
            <th colspan="3"></th>
        </tr>
     </thead>

     <tbody>
      @foreach ($servicios as $servicio)
         <tr>
             <td>{{$servicio->id}}</td>
             <td>{{$servicio->nombreServicio}}</td>
             <td>{{$servicio->valorServicio}}</td>
             <td width="10px">
                <a class="btn btn-primary btn-sm" href="{{route('admin.servicios.edit', $servicio)}}">Editar</a>
                
             </td>
             <td>
                <form action="{{route('admin.servicios.destroy', $servicio)}}" method="POST">
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