@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <div class="col-md-6">
    <h4 class="text-left">Detalles de la Tarea</h4>
    </div>
    <div class="col-md-6">
        <div class="btn-group float-right">
            <a href="{{ route('tarea.create') }}" class="btn btn-primary">Registrar Tarea</a>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 border-bottom"></div>
</div>
<div class="card text-center">
    <div class="card-header">
      Detalles de la tarea {{ $tareas->id }}
    </div>
    <div class="card-body">
        <div class="text-center">
            <img src="{{ asset('/vendor/adminlte/dist/img/download.png') }}" class="rounded-circle img-thumbnail" alt="20px">
        </div>
            <div class="row mt-2">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Actividad:</b>{{ $tareas->actividades }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Habilidad:</b>{{ $tareas->habiliadades  }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Fecha de Inicio:</b>{{ $tareas->fecha  }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Año Semana:</b>{{ $tareas->semana  }} semanas</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Cantidad Horas Diarias:</b>{{ $tareas->cant_horas  }} horas</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Resultado:</b>{{ $tareas->resultado_esperado  }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Tipo de Resultado:</b>{{ $tareas->tipo_resultado   }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><b>Evaluación:</b>
                        @if($tareas->evaluacion==null)
                        {{ 'Sin Nota Aún' }}
                        @endif
                        {{ $tareas->evaluacion }}
                    </p>
                </div>
            </div>
        <div class="btn-group mt-2">
        <a href="{{ route("tarea.index") }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Atras"><i class="fa fa-reply"></i></a>
        &nbsp;
        <a href="{{ url('/tarea/'.$tareas->id.'/edit') }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar SET"><i class="fa fa-edit"></i></a>
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
