@extends('layouts.plantilla')
 
@section('content')
<section class="vh-100" style="background-color: #EAEDED;">
 <div class="container">
    <br><br><br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="border-radius: 1rem;">
           
                <div class="card-header" style="background-color:#D7DBDD">{{ __('Restablecer contraseña') }}</div>
 
                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
 
                        <div class="form-outline mb-2">
                            <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese la direccion de correo electronico">
 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="row mb-0">
                            <div class="col-md-0 offset-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enviar enlace de restablecimiento de contraseña') }}
                                </button>
                               
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
