@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-4">
    <h4 class="text-center border-bottom">Modificando estudiante de id {{ $estudiantes->id }}</h4>
</div>

<div class="row ml-4 mr-4 pl-4 pr-4">
    <form action="{{ url('/estudiantes/'.$estudiantes->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
          <label for="nombre">Nombre(s)</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estudiantes->nombre }}">
          @error('nombre')
          <strong  class="error-message text-danger"> {{ $message }} </strong>
      @enderror
      <strong id="errornombre" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $estudiantes->apellido }}">
            @error('apellido')
            <strong class="error-message text-danger"> {{ $message }} </strong>
        @enderror
        <strong id="errorapellido" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="solapin">Solapin</label>
            <input type="text" class="form-control" id="solapin" name="solapin" value="{{ $estudiantes->solapin }}">
            @error('solapin')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorsolapin" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="grupo">Grupo</label>
            <input type="text" class="form-control" id="grupo" name="grupo" value="{{ $estudiantes->grupo }}">
            @error('grupo')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorgrupo" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $estudiantes->correo }}">
            @error('correo')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorcorreo" class="error-message text-danger"></strong>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <button type="submit" onClick="return Validar();" class="btn btn-primary mb-2">Modificar Estudiante</button>
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
<script src="{{ asset('js/validar.js') }}"></script>
@stop
