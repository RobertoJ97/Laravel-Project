@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  src="vendor/adminlte/dist/img/carusel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="vendor/adminlte/dist/img/carrusel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="vendor/adminlte/dist/img/carrusel3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>
@stop
@section('footer')
<div class="row">
    <small class="text-center">Centro de Desarrollo de Software Libre,2022</small>
    <small class="text-center">Univerisad de Ciencias Informaticas</small>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

