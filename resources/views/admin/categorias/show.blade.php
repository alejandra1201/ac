    @extends('adminlte::page')
    @section('title', 'Dashboard')

    @section('content_header')
        <h1>Mostrar Categorias</h1>
    @stop

    @section('content')
        
    <h1>Hola desde Show  {{$categoria}}</h1>

        @foreach ($categoria->images as $image)   
       <td><img src="{{ asset('http://localhost/ac/public/storage/imagenes/'.$image->url ) }}" width="400px" /> <td>

        @endforeach
    @endsection