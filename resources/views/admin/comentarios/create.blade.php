@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')

@stop
@section('content')
 
 
    <div class="container">
        <h2 class="text-center my-12">Comentar</h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.comentarios.store')}}"  method="POST" enctype="multipart/form-data">
 
            @csrf

        <div class="form-group col-md-6">
           <label>Usuario</label>
            <select name="user_id" id="iduser" class="form-control" arial-label="Desfault select example">
             @foreach ($users as $user)
                <option selected>{{$user->name}}</option>
             @endforeach
            </select>
        </div>
             
        <div class="form-group col-md-6">
              <label>Sitio</label>
               <select name="sitio_id" id="idsitio" class="form-control" arial-label="Desfault select example">
                  @foreach ($sitios as $sitio)
                 <option selected >{{$sitio->nombre_sitio}}</option>
                @endforeach
              </select>
        </div>
    
               
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
             <div class="form-group col-md-8">
                <label>Mensaje</label>
                    <textarea type="text" name="mensaje" id="mensaje" cols="30" rows="1" value="{{old ('mensaje')}}" ></textarea>
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
 
@endsection
