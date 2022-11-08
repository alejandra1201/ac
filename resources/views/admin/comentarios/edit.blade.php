@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
@stop
@section('content')
 
 
    <div class="container">
        <h2 class="text-center my-12">Editar Comentario</h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.comentarios.update',$comentario)}}"  method="POST" enctype="multipart/form-data">
 
            @csrf
            @method ('put')
    
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
             <div class="form-group col-md-8">
                <label>Mensaje</label>
                    <textarea type="text" name="mensaje" id="mensaje" cols="30" rows="1" value="{{$comentario->mensaje}}" ></textarea>
                    @error('descripcion')
                <small class="text-danger">{{$message}}</small>
                 @enderror
             </div>
       
    <script>

              ClassicEditor
                  .create( document.querySelector( '#mensaje' ) )
                  .catch( error => {
                      console.error( error );
                  } );
    </script>
 
             
           
       <!-- BUTTON DE ENVIAR  -->
           
            <button class="btn btn-primary mb-3" type="submit">Enviar</button>
       
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
