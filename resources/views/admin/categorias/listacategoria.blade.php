
@extends('layouts.plantilla')
 
@section('title', 'Home')
 
@section('content')
 
   @foreach ($categorias as $categoria)
   
 
    <div class="container">
  <div class="card-group vgr-cards">
    <div class="card">
      <div class="card-img-body">
 <img src="{{ asset ('ac/storage/app/public/imagenes/'.$categorias->image_categoria)}}" alt="" class="card-img-top">
      </div>
      <div class="card-body">
        <h4 class="card-title">{{$categoria->nombre_categoria}}</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little
          bit longer.</p>
        <a href="#" class="btn btn-outline-primary">Primary</a>
      </div>
    </div>
   
    </div>
<br>
<br>
<br>
     @endforeach
  </div>
</div>


  
@endsection
