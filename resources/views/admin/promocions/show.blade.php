    @extends('adminlte::page')
    @section('title', 'Dashboard')

    @section('content_header')
        <h1>Mostrar Promociones</h1>
    @stop

    @section('content')
        
    {{-- <h1>Hola desde Show  {{$promocion}}</h1>
    <div class="container py-8">
        <div class="grid grid-cols-3 gap-6">
        @foreach ($promocions as $promocion)
            <article syle="background-image: url({{Storage::url($promocions->image->url)}})">
            </article>

    </div> --}}
        


    <form action="{{route('admin.promocions.destroy',$promocion)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop