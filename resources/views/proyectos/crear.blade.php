@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear proyecto</h2>
  <form class="" action="{{route('proyectos.store')}}" method="post">
    @csrf
    Nombre: <input type="text" name="nombre">
    <br>Título: <input type="text" name="titulo">
    <br>Fecha Inicio: <input type="text" name="fechainicio">
    <br>Fecha fin: <input type="text" name="fechafin">
    <br>Horas estimadas: <input type="text" name="horasestimadas">
    <br>Empleado id: <input type="text" name="empleado_id">
    <input type="submit" name="" value="Guardar">
  </form>

@endsection