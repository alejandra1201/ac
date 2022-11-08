@extends('layouts.plantilla')
 
@section('title', 'Home')
 
@section('content')
 
   
<div class="row align-items-center" style="background-color:#D5D8DC;">
    <div class="col-1">
            <img src="img/5.png" width="100" height="100">
    </div>
      <div class="col-2">
          <h2 class="display-6">Aventura Caucana</h2>
    </div>
 
    <div class="col-5">
    <form class="d-flex" role="search"  >
      <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
   
    </form>
</div>
 
<br>
   
    <div class="col-1">
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
    <div class="row align-items-center" >
    <div class="col-12  text-center">
   
      </div>
      </div>
 
 
      <!-- <div class="p-10 bg-image" style="
      background-image: url('https://images.pexels.com/photos/6130339/pexels-photo-6130339.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
      height: 600px ; width:2000px;">
      </div>
  -->
  <div class="p-10 bg-image">
  <img src="img/fondo.jpg" width="2000" height="600">
   </div>
 
      <br><br><br><br><br>
 

 
<div
id="carouselMultiItemExample"
class="carousel slide carousel-dark text-center"
data-mdb-ride="carousel">
 
 
 
<div class="carousel-inner py-4">
   <div class="carousel-item active">
     <div class="container">
       <div class="row">
         <div class="col-lg-4">
           <div class="card">
              <img
              src="https://images.pexels.com/photos/1327373/pexels-photo-1327373.jpeg?auto=compress&cs=tinysrgb&w=1600"
              class="card-img-top"
              alt="Waterfall"/>
              <div class="card-body">
               <h5 class="card-title">Sitios</h5>
               <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a  href="{{ route('admin.sitios.listasitio') }}"class="btn btn-success">Mas</a>
            </div>
          </div>
        </div>
 
        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://images.pexels.com/photos/826369/pexels-photo-826369.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="card-img-top"
              alt="Sunset Over the Sea"
            />
            <div class="card-body">
              <h5 class="card-title">Servicios</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="{{ route('admin.promocions.listapromocion') }}" class="btn btn-success">Mas</a>
            </div>
          </div>
        </div>
 
        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://images.pexels.com/photos/708972/pexels-photo-708972.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="card-img-top"
              alt="Sunset over the Sea"/>
              <div class="card-body">
               <h5 class="card-title">Categorias</h5>
                <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
                </p>
               <a href="{{ route('admin.categorias.listacategoria') }}" class="btn btn-success">Mas</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
 
<br><br><br><br><br><br>
<div align ="center">
<div class="center-block">
  <div class="ratio ratio-16x9">
    <iframe width="750" height="415" src="https://www.youtube.com/embed/03NQQ-hr9c8"
    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
    gyroscope; picture-in-picture" allowfullscreen></iframe>
    <h6>Tomado de: Hansel Ospino</h6>
  </div>
</div>
</div>
 
 <br><br><br><br>
 <div class="row d-flex justify-content-center align-items-center h-500">
    <div class="col col-xl-8">
      <div class="card" style="border-radius: 2rem">
       
            <div class="card-body p-50 p-lg-50 text-black">
               <h2 class="display-5 text-center my-4">Sugerencias</h2>

                <div class="form-row">
                  <div class="form-group col-md-12">

                    <input name="nombre" type="text" class="form-control" value="{{old ('nombre')}}"  placeholder="Ingrese el nombre">
                </div>  

 

                <div class="form-group col-md-12">

                
                    <input type="email" class="form-control" name="correoElectronico" value="{{old ('email')}}"placeholder="Ejemplo: pepe@gmail.com">
                    @error('correoElectronico')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

 

                <div class="form-group col-md-12">
                    
                    <textarea type="textarea" class="form-control" name="mensaje">{{old ('mensaje')}}</textarea>
                    @error('mensaje')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div align="center">
                  <div class="text-center">
                            <div class="col-md-1 offset-md-12">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enviar') }}
                                </button>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <br><br>
  <div class="text-center text-black" style="background-color:#D5D8DC;">
 
    <div class="container p-4 pb-0">
 
      <section class="mb-8">
          <h1 class="display-6">Experiencias</h1>
      </section>
   
    </div>
  </div>
 
<div class="align-center">
<img src="https://images.pexels.com/photos/386000/pexels-photo-386000.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" weight="200" height="200"  >
<img src="https://images.pexels.com/photos/1428685/pexels-photo-1428685.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" weight="200" height="200"  >
<img src="https://images.pexels.com/photos/368506/pexels-photo-368506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" weight="200" height="200"  >
<img src="https://images.pexels.com/photos/1662770/pexels-photo-1662770.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" weight="200" height="200" >
</div>
<br><br><br>

 <section class="text-black">
    <div class="container text-center text-md-start mt-5">
     
      <div class="row mt-3">
       
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
 
          <h6 class="text-uppercase fw-bold mb-4">
            Servicios
          </h6>
          <p>
            <a href="#!" class="text-reset">Hospedaje</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Transporte</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Restaurantes</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Horarios</a>
          </p>
        </div>
 
 
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
         
          <h6 class="text-uppercase fw-bold mb-4">
            Que hacer
          </h6>
          <p>
            <a href="#!" class="text-reset">Cultura</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Bienestar</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Naturaleza y Aventura</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Glamping</a>
          </p>
        </div>
 
       
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
         
          <h6 class="text-uppercase fw-bold mb-4">
            Informacion
          </h6>
          <p>
            <a href="#!" class="text-reset">Precios</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ajustes</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ayuda</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Terminos y condiciones</a>
          </p>
        </div>
       
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
         
          <h6 class="text-uppercase fw-bold mb-4">Contactanos</h6>
            <i class="fas fa-envelope me-3 text-grayish"></i>
            aventuracaucana@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-grayish"></i>(+57) 3145529742</p>
          <p><i class="fas fa-print me-3 text-grayish"></i>(+57) 3215876539</p>
          <p><i class="fas fa-print me-3 text-grayish"></i>(+57) 3145900452</p>
        </div>
       
      </div>
     
    </div>
  </section>
 
 
<div class="text-center text-white" style="background-color:#D5D8DC;">
 
  <div class="container p-4 pb-0">
 
    <section class="mb-8">
 
     
          <a
          class="btn  btn-floating m-1 "
          style="background-color: white;"
          href="https://es-la.facebook.com/"
          role="button"
          ><i class="fab fa-facebook-f"></i>
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
       
          <a
          class="btn  btn-floating m-1"
          style="background-color: white;"
          href="https://twitter.com/?lang=es"
          role="button"
          ><i class="fab fa-twitter"></i>
          <img src="https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-3.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
       
 
        
       
          <a
          class="btn  btn-floating m-1"
          style="background-color:white ;"
          href="https://www.instagram.com/"
          role="button"
          ><i class="bi bi-instagram"></i>
          <img src="https://i0.wp.com/eltallerdehector.com/wp-content/uploads/2022/06/cd939-logo-instagram-png.png?fit=512%2C512&ssl=1" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
 
        <a
          class="btn  btn-floating m-1"
          style="background-color:white ;"
          href="https://www.whatsapp.com/?lang=es"
          role="button"
          ><i class="bi bi-whatsapp"></i>
          <img src="https://eltallerdehector.com/wp-content/uploads/2022/06/ee994-logo-whatsapp-png.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
    </section>
   
  </div>
 
 
 
 
 
 
</div>
</form>
</div>
</div>
   
 
@endsection()
    


