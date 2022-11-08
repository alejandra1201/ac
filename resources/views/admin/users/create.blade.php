@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenidos Aventura Caucana</h1>
@stop

@section('content')

<section style="background-color: #eee;">
  <div class="container py-5">
   <h3>Perfil</h3>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
             <div class="card-body text-center">
             <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
                    <div class="form-group col-md-6">
            <label >Cambiar Imagen</label>
              <input  type="file" name="image_user" class="form-control-file" accept="jpg/*">
                @error('image_user')
              <small class="text-danger">{{$message}}</small>
             @enderror

             <br> <br> 
       </div>
             <h5 class="my-3">Alejandra</h5>
             <p class="text-muted mb-4">dayana04242018@gmail.com</p>
            </div>
          </div>
        </div>

              <div class="col-lg-8">
                <div class="card mb-4">
                  <div class="card-body">
                   <div class="row">
                    <div class="col-sm-3">
                     <p class="mb-0">Nombre</p>
                  </div>
                     <div class="col-sm-9">
                    <p class="text-muted mb-0">Alejandra</p>
                </div>
              </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Apellido</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Zuñiga</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Correo electronico</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">dayana04242018@gmail.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telefono</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">3145529742</p>
              </div>
              
            </div>
            
            
       
          
          </div>
          
        </div>
        
      </div>



        <div class="col-lg-8">
        <h3>Editar perfil</h3>
                <div class="card mb-4">
                  <div class="card-body">
                   <div class="row">
                    <div class="col-sm-3">
                     <p class="mb-0">Nombre</p>
                  </div>
                  <div class="col-md-12"><input type="text" class="form-control" placeholder="Nombre" value=""></div>
    
        <div class="col-sm-3">
                     <p class="mb-0">Correo electronico</p>
                  </div>
                  <div class="col-md-12"><input type="text" class="form-control" placeholder="Ingrese un correo electronico" value=""></div>
        <hr>
       
        <div class="col-sm-3">
                     <p class="mb-0">Contraseña actual</p>
                  </div>
                  <div class="col-md-12"><input type="text" class="form-control" placeholder="Ingrese contraseña" value=""></div>
        <hr>
        <div class="col-sm-3">
                     <p class="mb-0">Contraseña nueva</p>
                  </div>
                  <div class="col-md-12"><input type="text" class="form-control" placeholder="Ingrese contraseña" value=""></div>
      
    </div>
    <br><br>
    
  <button class="btn btn-success mb-3" type="submit">Guardar cambios</button>
</section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
