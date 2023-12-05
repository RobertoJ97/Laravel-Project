@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <h4 class="text-center border-bottom">Registro de Tareas</h4>
</div>
<div class="row ml-4 mr-4 pl-4 pr-4">
    <form action="/tarea" method="POST">
        @csrf
        <div class="row mt-2">
            <div class="col">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha">
                @error('fecha')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
                <strong id="errorfecha" class="error-message text-danger"></strong>
            </div>
            <div class="col">
                <label for="semana">Semanas</label>
                <input type="number" class="form-control" id="semana" name="semana" placeholder="Ingrese la cantidad de semanas">
                @error('semana')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
                <strong id="errorsemana" class="error-message text-danger"></strong>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="actividades">Actividad</label>
                <input type="text" class="form-control" id="actividades" name="actividades" placeholder="Ingrese las actividades">
                @error('actividades')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
                <strong id="erroractividades" class="error-message text-danger"></strong>
            </div>
            <div class="col">
                <label for="habiliadades">Habilidad</label>
                <input type="text" class="form-control" id="habiliadades" name="habiliadades" placeholder="Ingrese las habiliadades">
                @error('habiliadades')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
                <strong id="errorhabiliadades" class="error-message text-danger"></strong>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="cant_horas">Cantidad Horas Diarias</label>
                <input type="number" class="form-control" id="cant_horas" name="cant_horas" placeholder="Ingrese la cantidad de horas diarias">
                @error('cant_horas')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
                <strong id="errorcant_horas" class="error-message text-danger"></strong>
            </div>
            <div class="col">
                <label for="resultado_esperado">Resultado</label>
                <input type="text" class="form-control" id="resultado_esperado" name="resultado_esperado" placeholder="Ingrese el resultado esperado">
                <strong id="errorresultado_esperado" class="error-message text-danger"></strong>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="tipo_resultado">Tipo Resultado</label>
                <input type="text" class="form-control" id="tipo_resultado" name="tipo_resultado" placeholder="Ingrese el tipo de resultado">
                @error('tipo_resultado')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
            </div>
            <div class="col">
                <label for="evaluacion">Evaluación</label>
                <input type="number" class="form-control" id="evaluacion" name="evaluacion" placeholder="Puede ingresar o no la calificación en este momento">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <button type="submit"  class="btn btn-primary mb-2">Registrar Tarea</button>
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
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/validar.js') }}"></script>
@stop
