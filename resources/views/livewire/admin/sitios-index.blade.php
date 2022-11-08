<div>
<div class="card">
  <div class="card-header">
      <a  class="btn btn-secondary btn-sm float-right" href="{{route('admin.sitios.create')}}">Agregar Sitios</a> 
  </div>

  <div  class="card-body">
     <table  class="table table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>Nombre sitio</th>
            <th>direccion</th>
            <th>municipio</th>
            <th>Contacto</th>
            <th>descripcion</th>
            <th>sitio_web</th>
            <th>Rutas</th>
            <th>imagen Sitio</th>
                  
            <th colspan="10"></th>
        </tr>
     </thead>

     <tbody>
      @foreach ($sitios as $sitio)
         


    <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>

        @endforeach 

          


           </tbody>
    </table>
  </div>
</div>

</div>
