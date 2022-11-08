@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    @livewire('admin.users-index')
@stop

@section('content')


<div class="card">

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

