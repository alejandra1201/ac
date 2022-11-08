@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
   
@section('content')
 
 
    <div class="container">
        <h2 class="text-center my-5">Registrar Sitio</h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.sitios.store')}}"  method="POST">
 
            @csrf 
        <label>Nombre Sitio</label>
        <input name="nombre_sitio" type="text" class="form-control" value="{{old ('nombre_sitio')}}"  placeholder="Nombre del sitio">



          
     <div class="form-row col-md-12">
        <label>Nombre Sitio</label>
             <input name="nombre_sitio" type="text" class="form-control" value="{{old ('nombre_sitio')}}"  placeholder="Nombre del sitio">
                @error('nombre_sitio')
            <small class="text-danger">{{$message}}</small>
          @enderror
    </div>  


     <div class="form-row">
        <div class="form-group col-md-6">
            <label>Dirección</label>
             <input type="text" class="form-control" name="direccion" value = "{{old ('direccion')}}"  placeholder="Cra 15 # 80n-51 ">
                @error('descripcion')
             <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
 
      <div class="form-group col-md-6">
                 <label>Contacto</label>
                <input type="number" name="Contacto" class="form-control" value="{{old ('Contacto')}}" placeholder="Telefono">
                 @error('contacto')
                <small class="text-danger">{{$message}}</small>
                 @enderror
       </div>
    </div>

      {{-- <div class="form-row">
        <div class="form-group col-md-6">
           <label>Categoria</label>
             <select name="categoria_id" id="idcategoria" class="form-control" arial-label="Desfault select example">
               @foreach ($categorias as $categoria)
             <option selected>{{$categoria->nombre_categoria}}</option>
            @endforeach
             </select>
        </div> --}}
{{-- 

        <div class="form-group col-md-6">
            <label >Adjuntar Imagen</label>
              <input type="file" name="image_sitio" class="form-control-file" accept="jpg/*">
                @error('image_sitio')
              <small class="text-danger">{{$message}}</small>
             @enderror
       </div>
      </div> --}}

      
     <div class="form-row">          
         <div class="form-group col-md-6">
             <label>Municipio</label>
                <input name="municipio"type="text" class="form-control" value="{{old ('municipio')}}" placeholder="municipio">
                 @error('municipio')
             <small class="text-danger">{{$message}}</small>
             @enderror
        </div>
             
 
</div>          
    <div class="form-row">                  
       <div class="form-group col-md-6">
            <label>Ruta Sitio</label>
               <input name="rutas"type="text" class="form-control" value="{{old ('rutas')}}" placeholder="ruta del sitio">
                 @error('rutas')
             <small class="text-danger">{{$message}}</small>
              @enderror
        </div>
         
         <div class="form-group col-md-6">
            <label>Sitio Web</label>
                <input name="sitio_web"type="text" class="form-control" value="{{old ('sitio_web')}}" placeholder="Sitio web">
                  @error('sitio_web')
                small class="text-danger">{{$message}}</small>
                @enderror
        </div>
    </div>  
       
   <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
        <div class="form-group col-md-8">
            <label>Descripcion</label>
                 <textarea type="text" name="descripcion" id="descripcion" cols="30" rows="1" value="{{old ('sitio_web')}}" ></textarea>
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

    <button class="btn btn-dark mb-3" type="submit">Enviar</button>
       
        </form>
    </div>

@endsection
