@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-4">
    <h4 class="text-center border-bottom">Registro de Responsables</h4>
</div>

<div class="row ml-4 mr-4 pl-4 pr-4">
    <form action="/responsable" method="POST">
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre(s)</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
          @error('nombre')
          <strong class="error-message text-danger"> {{ $message }} </strong>
          @enderror
          <strong id="errornombre" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese los apellidos">
            @error('apellido')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorapellido" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="solapin">Solapin</label>
            <input type="text" class="form-control" id="solapin" name="solapin" placeholder="Ingrese el solapin">
            @error('solapin')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorsolapin" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="ano_responsable">Asignatura</label>
            <input type="text" class="form-control" id="ano_responsable" name="ano_responsable" placeholder="Ingrese el grupo">
            @error('ano_responsable')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorano_responsable" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese el usuario">
            @error('usuario')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorusuario" class="error-message text-danger"></strong>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo electrónico">
            @error('correo')
            <strong class="error-message text-danger"> {{ $message }} </strong>
            @enderror
            <strong id="errorcorreo" class="error-message text-danger"></strong>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <button type="submit" onClick="return ValidarResponsable();"  class="btn btn-primary mb-2">Registrar Responsable</button>
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
