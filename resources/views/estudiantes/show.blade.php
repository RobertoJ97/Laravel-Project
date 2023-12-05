@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <div class="col-md-6">
    <h4 class="text-left">Detalles del Estudiante</h4>
    </div>
    <div class="col-md-6">
        <div class="btn-group float-right">
            <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Registrar Estudiante</a>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 border-bottom"></div>
</div>
<div class="card text-center">
    <div class="card-header">
      Detalles del estudiante {{ $estudiantes->id }}
    </div>
    <div class="card-body">
        <div class="text-center">
            <img src="{{ asset('/vendor/adminlte/dist/img/avatar.png') }}" class="rounded-circle img-thumbnail" alt="20px">
        </div>
            <div class="row mt-2">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Nombre(s):</b>{{ $estudiantes->nombre }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Apellido(s):</b>{{ $estudiantes->apellido }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Solapin:</b>{{ $estudiantes->solapin }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Grupo:</b>{{ $estudiantes->grupo }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Correo:</b>{{ $estudiantes->correo }}</p>
                </div>
            </div>
        <div class="btn-group mt-2">
        <a href="{{ route("estudiantes.index") }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Atras"><i class="fa fa-reply"></i></a>
        &nbsp;
        <a href="{{ url('/estudiantes/'.$estudiantes->id.'/edit') }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Estudiante"><i class="fa fa-edit"></i></a>
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
