@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-4">
    <h4 class="text-center border-bottom">Modificando el SET con id {{ $set->id }}</h4>
</div>

<div class="row ml-4 mr-4 pl-4 pr-4">
    <form action="{{ url('/set/'.$set->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
          <label for="nombre">Nombre(s)</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $set->nombre }}">
          @error('nombre')
          <strong class="error-message text-danger"> {{ $message }} </strong>
          @enderror
          <strong id="errornombre"class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $set->apellido }}">
            @error('apellido')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorapellido"class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="solapin">Solapin</label>
            <input type="text" class="form-control" id="solapin" name="solapin" value="{{ $set->solapin }}">
            @error('solapin')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorsolapin"class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="categoria_docente">Categoría Docente</label>
            <input type="text" class="form-control" id="categoria_docente" name="categoria_docente" value="{{ $set->categoria_docente }}">
            @error('categoria_docente')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorcategoria_docente"class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="grado_cientifico">Grado Científico</label>
            <input type="text" class="form-control" id="grado_cientifico" name="grado_cientifico" value="{{ $set->grado_cientifico }}">
            @error('grado_cientifico')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorgrado_cientifico"class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $set->correo }}">
            @error('correo')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorcorreo"class="error-message text-danger"></strong>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <button type="submit" onClick="return ValidarSET();" class="btn btn-primary mb-2">Modificar SET</button>
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
