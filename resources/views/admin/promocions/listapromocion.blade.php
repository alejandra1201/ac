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


    @foreach($promocions as $promocion)
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{$promocion->tipo_promocion}}</h5>
        <p class="card-text">{{$promocion->descripcionpromocion}}</p>
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
    


