@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    <h1></h1>
@stop
 
@section('content')
   
<div class="card">
  <div class="card-header">
    <a  class="btn btn-secondary" href="{{route('admin.promocions.create')}}">Agregar promocion</a>
        {{-- <a  class="btn btn-secondary" href="{{route('admin.promocions.show')}}">Mostrar promocion</a>  --}}
  </div>
 
  <div  class="card-body">
     <table  class="table table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>tipo_promocion</th>
            <th>descripcionpromocion</th>
            <th>descuento</th>
            <th>fechai</th>
            <th>fechaf</th>
            <th>Imagen</th>
            <th colspan="5"></th>
        </tr>
     </thead>
 
     <tbody>
     @foreach ($promocions as $promocion)
         <tr>
                <td>{{$promocion->id}}</td>
                <td>{{$promocion->tipo_promocion}}</td>
                <td>{{$promocion->descripcionpromocion}}</td>
                <td>{{$promocion->descuento}}</td>
                <td>{{$promocion->fechai}}</td>
                <td>{{$promocion->fechaf}}</td>
                <td>{{$promocion->image_promocion}}</td>
               
             <td width="10px">
                <a class="btn btn-primary btn-sm" href="{{route('admin.promocions.edit', $promocion)}}">Editar</a>
               
             </td>
             <td>
                <form action="{{route('admin.promocions.destroy', $promocion)}}" method="POST">
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
