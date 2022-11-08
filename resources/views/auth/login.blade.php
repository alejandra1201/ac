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

<br><br><br>
<div class="container">

<div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-9">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0" >
            <div class="col-md-6 col-lg-5 d-none d-md-block" >
              <img src="https://i.pinimg.com/736x/1f/94/fa/1f94fac521db0830e8372dcfca46844e.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-10 text-black">
             
              <div class="text-center">
                  <img src="img/6.jpg"
                    style="width: 90px;" alt="logo">
                  <h4 class="mt-1 mb-3 pb-1">Iniciar Sesion</h4>
                </div>
 
    <div class="row justify-content-center">
        <div class="col-md-15">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
 
                        <div class="form-outline mb-6">
                       
                            <label for="email" class="col-md-10 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
                            <div class="col-md-16">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="correo electronico" >
 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 
                      
           
                        <div class="form-outline mb-6">
                            <label for="password" class="col-md-10 col-form-label text-md-end">{{ __('Contraseña') }}</label>
 
                            <div class="col-md-16">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="contraseña">
 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3">
                        <div class="col d-flex justify-content-center">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link offset " href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
 
           
                            <div class="col-md-0 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                   
                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                         </div>
                        </div>
 
           
                       
 
                        <div class="text-center">
                            <div class="col-md-1 offset-md-3">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Iniciar sesion') }}
                                </button>
 
                                <div style="background-color:#D7DBDD">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
          </div>
@endsection
