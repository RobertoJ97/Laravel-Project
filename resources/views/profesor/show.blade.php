@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <div class="col-md-6">
    <h4 class="text-left">Detalles del Profesor</h4>
    </div>
    <div class="col-md-6">
        <div class="btn-group float-right">
            <a href="{{ route('profesor.create') }}" class="btn btn-primary">Registrar Profesor</a>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 border-bottom"></div>
</div>
<div class="card text-center">
    <div class="card-header">
      Detalles del profesor {{ $profesor->id }}
    </div>
    <div class="card-body">
        <div class="text-center">
            <img src="{{ asset('/vendor/adminlte/dist/img/avatar.png') }}" class="rounded-circle img-thumbnail" alt="20px">
        </div>
            <div class="row mt-2">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Nombre(s):</b>{{ $profesor->nombre }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Apellido(s):</b>{{ $profesor->apellido }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Solapin:</b>{{ $profesor->solapin }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Usuario:</b>{{ $profesor->usuario }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Correo:</b>{{ $profesor->correo }}</p>
                </div>
            </div>
        <div class="btn-group mt-2">
        <a href="{{ route("profesor.index") }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Regresar Estudiante"><i class="fa fa-reply"></i></a>
        &nbsp;
        <a href="{{ url('/profesor/'.$profesor->id.'/edit') }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Estudiante"><i class="fa fa-edit"></i></a>
    </div>
    </div>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/ionicons/css/ionicons.min.css') }}">
@stop

@section('js')

@stop
