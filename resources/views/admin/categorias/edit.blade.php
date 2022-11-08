
 @extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    
@stop
@section('content')
<div class="card">
  <div class="card-body">
 
    <div class="container">
        <h2 class="display-4 text-center my-5"></h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.categorias.update',$categoria)}}"  method="POST" enctype="multipart/form-data">
 
            @csrf
            @method ('put')
            
      <h2 class="display-7 text-lef my-3">Editar Categoria</h2>
<div class="form-row">

       <div class="form-group col-md-12">
           <label>Nombre Categoria</label>
              <input name="nombre_categoria" type="text" class="form-control" value="{{$categoria->nombre_categoria}}"  placeholder="Ingrese la categoria  a la que pertenece Sitio">
               @error('nombre_categoria')
            <small class="text-danger">{{$message}}</small>
           @enderror
       </div> 
      
      </div>
      <div class="form-group col-md-6">
           <label >Adjuntar Imagen</label>
              <input type="file" name="url" class="form-control-file" accept="jpg/*">
                 @error('image')
                <small class="text-danger">{{$message}}</small>
             @enderror
      </div>
</div>

  

            <!-- BUTTON DE ENVIAR  -->
           
            <button class="btn btn-primary mb-3" type="submit">Enviar</button>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop    
@section ('js')
 
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
  
<script>
@endsection


            