@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <h4 class="text-center border-bottom">Modificando la tarea con id </h4>
</div>
<div class="row ml-4 mr-4 pl-4 pr-4">
    <form action="" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row mt-2">
            <div class="col">
                <label for="evaluacion">Evaluación</label>
                <input type="text" class="form-control" id="evaluacion" name="evaluacion" placeholder="Ingrese las evaluacion"> 
            </div>
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
