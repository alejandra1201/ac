@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    
@stop
@section('content')
<div class="card">
  <div class="card-body">
 
    <div class="container">
        <h2 class="text-center my-5">Agregar Servicios</h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.servicios.store')}}"  method="POST" enctype="multipart/form-data">
 
            @csrf
         
            <h2 class=" text-lef my-3"></h2>
           
           <div class="form-row">

           <div class="form-group col-md-12">
                <label>Nombre servicio</label>
                  <input name="nombreServicio" type="text" class="form-control" value="{{old ('nombre_servicio')}}"  placeholder="Ingrese la categoria del Sitio">
                  @error('nombreServicio')
                <small class="text-danger">{{$message}}</small>
               @enderror
           </div> 

           <div class="form-group col-md-12">
              <label>valor del servicio</label>
                <input name="valorServicio" type="textarea" class="form-control" value="{{old ('valorServicio')}}"  placeholder="Ingrese la categoria del Sitio">
                 @error('valorServicio')
               <small class="text-danger">{{$message}}</small>
             @enderror
           </div> 


           <div class="form-group col-md-12">
              <label>Sitio</label>
               <select name="sitio_id" id="idsitio" class="form-control" arial-label="Desfault select example">
                  @foreach ($sitios as $sitio)
                  <option selected >{{$sitio->nombre_sitio}}</option>
                  @endforeach
              </select>
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

 
</script>
@endsection