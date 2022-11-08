@extends('layouts.plantilla')
 
@section('content')
<div class="row bg-secondary align-items-center" >
    <div class="col">
            <img src="img/5.png" width="110" height="110">
    </div>
      <div class="col-2">
          <h1 class="display-6">Aventura Caucana</h1>
    </div>

    <div class="col">
      Sitios
    </div>
    <div class="col">
       Servicios
    </div>
    <div class="col-2">
       Categorias
    </div>
    <div class="col-">
       <a href="{{ route('register') }}" class="btn btn-success me-md-2">Registrarse</a>
    </div>
    <div class="col-2">
        <a href="{{ route('login') }}" class="btn btn-success me-md-2">Iniciar Sesion</a>
    </div>
    
    <div class="col-1">
    <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="{{ route('admin.home') }}">Home</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.home') }}">Tu perfil</a></li>
          
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" url='logout'>Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>

    
<section class="vh-100" height="768" width="2000" style="background-color:#D7DBDD">

<br><br>
<div class="container" >
<div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0" >
            <div class="col-md-6 col-lg-5 d-none d-md-block" >
              <img src="https://i.pinimg.com/736x/1f/94/fa/1f94fac521db0830e8372dcfca46844e.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md- col-lg-7 d-flex align-items-center">
              <div class="card-body p-12 p-lg-10 text-black">
    <div class="row justify-content-center" >
        <div class="col-md-10" >
           
            <div class="text-center"  >
    
                    <h2>Bienvenidos</h2>

                  <h4 class="mt-1 mb-3 pb-1">Registrate</h4>
                </div>
            
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
 
                        <div class="row mb-8">
                            <div class="col-md-12 offset-md-1 text-center">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingrese el nombre">
 
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-8">
                            <div class="col-md-12 offset-md-1 text-center">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese una direccion de correo electronico">
 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="row mb-8">
                         <div class="col-md-12 offset-md-1 text-center">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" autofocus placeholder="Ingrese una contraseña">
 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="row mb-8">
                            <div class="col-md-12 offset-md-1 text-center">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus placeholder="Confirme de nuevo su contraseña">
                            </div>
                        </div>
<br>
                        <div class="row mb-8">
                            <div class="col-md-12 offset-md-0 text-center">
                                <button type="submit" class="btn btn-success text-center">
                                    {{ __('Registrarse') }}
                                </button>
                          <br>
                          

 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
 
 


