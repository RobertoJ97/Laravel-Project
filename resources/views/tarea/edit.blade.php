@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <h4 class="text-center border-bottom">Modificando la tarea con id {{ $tareas->id }}</h4>
</div>
<div class="row ml-4 mr-4 pl-4 pr-4">
    <form action="{{ url('/tarea/'.$tareas->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row mt-2">
            <div class="col">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $tareas->fecha }}">
            </div>
            <div class="col">
                <label for="semana">Semanas</label>
                <input type="number" class="form-control" id="semana" name="semana" value="{{ $tareas->semana }}">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="actividades">Actividades</label>
                <input type="text" class="form-control" id="actividades" name="actividades" value="{{ $tareas->actividades }}">
            </div>
            <div class="col">
                <label for="habiliadades">Habilidades</label>
                <input type="text" class="form-control" id="habiliadades" name="habiliadades" value="{{ $tareas->habiliadades }}">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="cant_horas">Cantidad Horas Diarias</label>
                <input type="number" class="form-control" id="cant_horas" name="cant_horas" value="{{ $tareas->cant_horas }}">
            </div>
            <div class="col">
                <label for="resultado_esperado">Resultado</label>
                <input type="text" class="form-control" id="resultado_esperado" name="resultado_esperado" value="{{ $tareas->resultado_esperado }}">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="tipo_resultado">Tipo Resultado</label>
                <input type="text" class="form-control" id="tipo_resultado" name="tipo_resultado" value="{{ $tareas->tipo_resultado }}">
            </div>
            <div class="col">
                <label for="evaluacion">Evaluación</label>
                <input type="number" class="form-control" id="evaluacion" name="evaluacion" value="{{ $tareas->evaluacion }}">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <button type="submit" class="btn btn-primary mb-2">Modificar Tarea</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('js')

@stop
