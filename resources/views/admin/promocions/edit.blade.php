@extends('adminlte::page')
@section('title', 'Aventura Caucana')
 
@section('content_header')
    
@stop
@section('content')
 
 
    <div class="container">
        <h2 class="display-4 text-center my-5">Editar promocion</h2>
       
        <!-- FORMULARIO  -->
       
        <form action="{{route('admin.promocions.update',$promocion)}}"  method="POST" enctype="multipart/form-data">
 
            @csrf
            @method ('put')
            
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
        <div class="form-group col-md-12">
            <label>Descripcion Promocion</label>
                 <textarea type="text" name="descripcionpromocion" id="descripcionpromocion" cols="30" rows="1"  value="{{$promocion->descripcionpromocion}}" ></textarea>
              @error('descripcionpromocion')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
       
    <script>
              ClassicEditor
                .create( document.querySelector( '#descripcionpromocion' ) )
                .catch( error => {
                 console.error( error );
                  } );
    </script>
 
          <div class="form-group col-md-12">
             <label>Descuento</label>
                <input name="descuento" type="text" class="form-control" value="{{$promocion->descuento}}"  placeholder="Descuento">
                   @error('descuento')
                 <small class="text-danger">{{$message}}</small>
                 @enderror
          </div>  
          
      <div class="form-row">
              <div class="form-group col-md-6">
                  <label>Fecha Inicial</label>
                    <input type="Date" name="fechai" class="form-control " class="datepicker" data-date-format="mm/dd/yyyy" value="{{$promocion->fechai}}">
                      @error('fechai')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
      </div>
  
        <div class="form-group col-md-6">
                <label>Fecha Final</label>
                    <input type="Date" name="fechaf" class="form-control " class="datepicker" data-date-format="mm/dd/yyyy" value="{{$promocion->fechaf}}">
                      @error('fechaf')
                    <small class="text-danger">{{$message}}</small>
              @enderror
        </div>

        <div class="form-group col-md-6">
                <label>Tipo promocion</label>
                    <input name="tipo_promocion" type="text" class="form-control" value="{{$promocion->tipo_promocion}}" placeholder="Descuento">
                      @error('tipo_promocion')
                  <small class="text-danger">{{$message}}</small>
              @enderror
        </div>  
      </div>
            
      <div class="form-row">
            <div class="form-group col-md-6">
              <label >Adjuntar imagen</label>
                  <input type="file" name="image_promocion" class="form-control-file" accept="jpg/*">
                @error('image_promocion')
              <small class="text-danger">{{$message}}</small>
            @enderror
      </div>

    </div>
           
       <!-- BUTTON DE ENVIAR  -->
           
            <button class="btn btn-primary mb-3" type="submit">Enviar</button>
       
        </form>
    </div>
 
@endsection
