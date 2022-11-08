@extends('adminlte::page')
@section('title', 'Aventura Caucana')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')
   
<div class="card">
  <div class="card-header">
      <a  class="btn btn-secondary" href="{{route('admin.categorias.create')}}">Agregar Categoria</a> 
  </div>

   <div  class="card-body">
     <table  class="table table-striped">
      <thead>
        <tr>
            <th>id</th>
            <th>Nombre categoria</th>
            <th>Imagen</th>
            <th colspan="3"></th>
        </tr>
     </thead>
<tbody>

      @foreach ($categorias as $categoria)
      
         <tr>
             <td>{{$categoria->id}}</td>
             <td>{{$categoria->nombre_categoria}}</td>
             
             {{-- <td>{{ asset('storage/public/imagenes/'.$image->url) }}</td> --}}
             <td width="10px">
            
              <a class="btn btn-primary btn-sm" href="{{route('admin.categorias.show', $categoria)}}">show</a>
              
           </td>
           <td>
              <form action="{{route('admin.categorias.destroy', $categoria)}}" method="POST">
                  @csrf
                  @method('delete')

                  <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
              </form>
           </td>
        

       </tr>    

       @endforeach  
       {{-- @foreach ($categoria->images as $image)   
       <td><img src="{{ asset('storage/public/imagenes/'.$image->url) }}" alt="" height="250px"/> <td>
        @endforeach     --}}
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