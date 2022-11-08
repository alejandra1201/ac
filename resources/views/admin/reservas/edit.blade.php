@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    
@stop
@section('content')
<div class="card">
  <div class="card-body">
 
    <div class="container">
        <h2 class="text-center my-5">Editar Reserva</h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.reservas.update',$reserva)}}"  method="POST" enctype="multipart/form-data">
 
            @csrf
            @method ('put')

            
      <h2 class=" text-lef my-3"></h2>
      <div class="form-row">
      <div class="form-group col-md-12">
          <label>Correo Electronico</label>
            <input name="correo" type="text" class="form-control" value="{{$reserva->correo}}" placeholder="Ingrese la categoria del Sitio">
                @error('correo')
            <small class="text-danger">{{$message}}</small>
        @enderror
      </div> 

      <div class="form-group col-md-12">
          <label>Contacto</label>
              <input name="contacto" type="text" class="form-control" value="{{$reserva->contacto}}"  placeholder="Ingrese la categoria del Sitio">
               @error('nombre_categoria')
             <small class="text-danger">{{$message}}</small>
         @enderror
      </div> 
       
      <div class="form-group col-md-6">
          <label>Fecha Reserva</label>
             <input type="Date" name="fechaReserva" class="form-control " class="datepicker" data-date-format="mm/dd/yyyy" value="{{$reserva->fechaReserva}}">
              @error('mensaje')
          <small class="text-danger">{{$message}}</small>
         @enderror
     </div>
     
     <div class="form-group col-md-4">
        <label>Estado Reserva</label>
         <select name="estado" class="form-control">
              <option selected value="">Selecione una opcion</option>
                <option value="TRUE">Pendiente</option>
              <option value="FALSE">Lista</option>
         </select>
         @error('estado')
       <small class="text-danger">{{$message}}</small>
       @enderror
     </div>

     
     <div class="form-group col-md-12">
         <label>Descripcion Reserva</label>
            <textarea type="textarea" class="form-control" name="descripcionReserva" value="{{$reserva->descripcionReserva}}">{{old ('descripcionReserva')}}</textarea>
            @error('descripcionReserva')
            <small class="text-danger">{{$message}}</small>
          @enderror
     </div>


     <div class="form-group col-md-12">
              <label>Sitio</label>
               <select name="sitio_id" id="idsitio" class="form-control" arial-label="Desfault select example" value="{{$sitio->nombre_sitio}}">
                  @foreach ($sitios as $sitio)
                 <option selected >{{$sitio->nombre_sitio}}</option>
                @endforeach
              </select>
        </div>

       
     
        <div class="form-group col-md-12">
           <label>categoria</label>
             <select name="categoria_id" id="idcategoria" class="form-control" arial-label="Desfault select example"  value="{{$categoria->nombre_categoria}}">
               @foreach ($categorias as $categoria)
             <option selected>{{$categoria->nombre_categoria}}</option>
            @endforeach
             </select>
        </div>
  
  
   
            <!-- BUTTON DE ENVIAR  -->
           
            <button class="btn btn-primary mb-3" type="submit">Enviar</button>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop    
@section ('js')
 
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

  
<script>
@endsection