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
       
        <form action="{{route('admin.servicios.update',$servicio)}}"  method="POST" enctype="multipart/form-data">
 
            @csrf
            @method ('put')

            
            <h2 class="text-lef my-3">Editar Servicios</h2>
           
           <div class="form-row">

           <div class="form-group col-md-12">
              <label>Nombre servicio</label>
                <input name="nombreServicio" type="text" class="form-control"  value="{{$servicio->nombreServicio}}"  placeholder="Ingrese la categoria del Sitio">
                  @error('nombreServicio')
               <small class="text-danger">{{$message}}</small>
              @enderror
           </div> 

           <div class="form-group col-md-12">
               <label>valor del servicio</label>
                   <input name="valorServicio" type="text" class="form-control"  value="{{$servicio->valorServicio}}"  placeholder="Ingrese la categoria del Sitio">
                   @error('valorServicio')
                <small class="text-danger">{{$message}}</small>
              @enderror
           </div> 

           
           </div> 
         

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