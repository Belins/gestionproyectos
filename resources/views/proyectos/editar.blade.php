@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
    <form class="" action="{{route('proyectos.update', $proyecto->id)}}" method="post">
      @csrf
      Nombre: <input type="text" name="nombre" value="{{$proyecto->nombre}}">
      <br>Título: <input type="text" name="titulo" value="{{$proyecto->titulo}}">
      <br>Fecha Inicio: <input type="text" name="fechainicio" value="{{$proyecto->fechainicio}}">
      <br>Fecha fin: <input type="text" name="fechafin" value="{{$proyecto->fechafin}}">
      <br>Horas estimadas: <input type="text" name="horasestimadas" value="{{$proyecto->horasestimadas}}">
      <br>Empleado id: <input type="text" name="empleado_id" value="{{$proyecto->empleado_id}}">
      <input type="submit" name="" value="Guardar">
    </form>
    </table>

@endsection
