@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
   
@stop
@section('content')
 
 
    <div class="container">
        <h2 class="text-center my-5">Editar Sitio</h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.sitios.update',$sitio)}}"  method="POST" enctype="multipart/form-data" autocomplete="off">
 
            @csrf
            @method ('put')
         
     <div class="form-row col-md-12">
        <label>Nombre Sitio</label>
             <input name="nombre_sitio" type="text" class="form-control" value="{{$sitio->nombre_sitio}}"  placeholder="Nombre del sitio" >
                @error('nombre_sitio')
            <small class="text-danger">{{$message}}</small>
          @enderror
    </div>  


     <div class="form-row">
        <div class="form-group col-md-6">
            <label>Dirección</label>
             <input type="text" class="form-control" name="direccion"  value="{{$sitio->direccion}}"  placeholder="Cra 15 # 80n-51 ">
                @error('direccion')
             <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
 
      <div class="form-group col-md-6">
                 <label>Contacto</label>
                <input type="number" name="Contacto" class="form-control"  value="{{$sitio->contacto}}" placeholder="Telefono">
                 @error('contacto')
                <small class="text-danger">{{$message}}</small>
                 @enderror
       </div>
    </div>

  <div class="form-row">
  
         <div class="form-group col-md-6">
            <label >Adjuntar Imagen</label>
              <input type="file" name="image_sitio" class="form-control-file" accept="jpg/png*">
                @error('image_sitio')
              <small class="text-danger">{{$message}}</small>
             @enderror
       </div>
      </div>

      
     <div class="form-row">          
         <div class="form-group col-md-6">
             <label>Municipio</label>
                <input name="municipio"type="text" class="form-control"  value="{{$sitio->municipio}}" placeholder="municipio">
                 @error('municipio')
             <small class="text-danger">{{$message}}</small>
             @enderror
        </div>
             
 
</div>          
    <div class="form-row">                  
       <div class="form-group col-md-6">
            <label>Ruta Sitio</label>
               <input name="rutas"type="text" class="form-control" value="{{$sitio->rutas}}" placeholder="ruta del sitio">
                 @error('rutas')
             <small class="text-danger">{{$message}}</small>
              @enderror
        </div>
         
         <div class="form-row col-md-6">
            <label>Sitio Web</label>
                <input name="sitio_web"type="text" class="form-control" value="{{$sitio->sitio_web}}" placeholder="Sitio web">
                  @error('sitio_web')
                small class="text-danger">{{$message}}</small>
                @enderror
        </div>
    </div>  
  <br><br>
  
   <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
        <div class="form-row col-md-8">
            <label>Descripcion</label>
                 <textarea type="text" name="descripcion" id="descripcion" cols="30" rows="1"  value="{{$sitio->descripcion}}" ></textarea>
              @error('descripcion')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
       
    <script>
              ClassicEditor
                .create( document.querySelector( '#descripcion' ) )
                .catch( error => {
                 console.error( error );
                  } );
    </script>
       <!-- BUTTON DE ENVIAR  -->
           
            <button class="btn btn-dark mb-3" type="submit">Enviar</button>
       
        </form>
    </div>
 
   @stop
 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop    
@section ('js') 
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>
@endsection
