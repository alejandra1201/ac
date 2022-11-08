@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    <h1>Lista de sitios</h1>
     {{-- @livewire('admin.sitios-index') --}}
@stop
 
@section('content')
   
<div class="card">
  <div class="card-header">
 
      <a  class="btn btn-secondary btn-sm float-right" href="{{route('admin.sitios.create')}}">Agregar Sitios</a>
  </div>
 
  <div  class="card-body">
     <table  class="table table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>Nombre sitio</th>
            <th>direccion</th>
            <th>municipio</th>
            <th>Contacto</th>
            <th>descripcion</th>
            <th>sitio_web</th>
            <th>Rutas</th>
            <th>imagen Sitio</th>
                 
            <th colspan="10"></th>
        </tr>
     </thead>
 <tbody>


     @foreach ($sitiosArray as $sitio)
         
         <tr>
             <td>{{$sitio['nombre_sitio']}}</td>
             {{-- <td>{{$sitio->nombre_sitio}}</td>
             <td>{{$sitio->direccion}}</td>
             <td>{{$sitio->municipio}}</td>
             <td>{{$sitio->Contacto}}</td>
             <td>{{$sitio->descripcion}}</td>
             <td>{{$sitio->sitio_web}}</td>
             <td>{{$sitio->rutas}}</td>
             <td>{{$sitio->image_sitio}}</td> --}}
   
 
                <td width="10px">
                  <a class="btn btn-primary btn-sm" href="{{route('admin.sitios.edit', $sitio)}}">Editar</a>
                 
                </td>
              <td>
                  <form action="{{route('admin.sitios.destroy', $sitio)}}" method="POST">
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
