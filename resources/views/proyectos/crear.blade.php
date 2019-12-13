@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear proyecto</h2>
  <form class="" action="{{route('proyectos.store')}}" method="post">
    @csrf
    @if ($errors ->has('nombre'))
      <br><a class="error">{{ $errors->first('nombre') }}</a>
    @endif
    Nombre: <input type="text" name="nombre">
    @if ($errors ->has('titulo'))
      <br><a class="error">{{ $errors->first('titulo') }}</a>
    @endif
    <br>Título: <input type="text" name="titulo">
    @if ($errors ->has('fechainicio'))
      <br><a class="error">{{ $errors->first('fechainicio') }}</a>
    @endif
    <br>Fecha Inicio: <input type="text" name="fechainicio">
    @if ($errors ->has('fechafin'))
      <br><a class="error">{{ $errors->first('fechafin') }}</a>
    @endif
    <br>Fecha fin: <input type="text" name="fechafin">
    @if ($errors ->has('horasestimadas'))
      <br><a class="error">{{ $errors->first('horasestimadas') }}</a>
    @endif
    <br>Horas estimadas: <input type="text" name="horasestimadas">
    @if ($errors ->has('empleado_id'))
      <br><a class="error">{{ $errors->first('empleado_id') }}</a>
    @endif
    <br>Empleado id: <input type="text" name="empleado_id">
    <input type="submit" name="" value="Guardar">
  </form>

@endsection