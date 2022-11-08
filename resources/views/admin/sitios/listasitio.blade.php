@extends('layouts.plantilla')
 
@section('title', 'Home')
 
@section('content')
 


<nav class="bg-dark navbar-dark">
  <div class="container">
    <a href="" class="navbar-brand"><i class="fas fa-tree mr-2"></i>Aventura Caucana</a>
  </div>
  </nav>
   <section id="header" class="jumbotron text-center">
   <div class="p-10 bg-image">
  <img src="..." class="img-fluid" alt="...">
   </div>
   
 
</section>
  
<section id="gallery">
  <div class="container">
    <div class="row">


    @foreach($sitios as $sitio)
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="{{ asset ('ac/storage/app/public/imagenes/'.$sitio->image_sitio)}}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{$sitio->nombre_sitio}}</h5>
        <p class="card-text">{{$sitio->descripcion}}</p>
       <a href="" class="btn btn-outline-success btn-sm">Read More</a>
        
      </div>
     </div>
    </div>
  @endforeach
    </div>
  </div>
</div>
</section>
 
@endsection()
    


