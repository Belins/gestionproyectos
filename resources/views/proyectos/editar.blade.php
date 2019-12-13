@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
    <form class="" action="{{route('proyectos.update', $proyecto->id)}}" method="post">
      @csrf
      Nombre: <input type="text" name="nombre" value="{{$proyecto->nombre}}" readonly="true">
      @if ($errors ->has('titulo'))
        <br><a class="error">{{ $errors->first('titulo') }}</a>
      @endif
      <br>Título: <input type="text" name="titulo" value="{{$proyecto->titulo}}">
      @if ($errors ->has('fechainicio'))
        <br><a class="error">{{ $errors->first('fechainicio') }}</a>
      @endif
      <br>Fecha Inicio: <input type="date" name="fechainicio" value="{{$proyecto->fechainicio}}">
      @if ($errors ->has('fechafin'))
        <br><a class="error">{{ $errors->first('fechafin') }}</a>
      @endif
      <br>Fecha fin: <input type="date" name="fechafin" value="{{$proyecto->fechafin}}">
      @if ($errors ->has('horasestimadas'))
        <br><a class="error">{{ $errors->first('horasestimadas') }}</a>
      @endif
      <br>Horas estimadas: <input type="text" name="horasestimadas" value="{{$proyecto->horasestimadas}}">
      @if ($errors ->has('empleado_id'))
        <br><a class="error">{{ $errors->first('empleado_id') }}</a>
      @endif
      <br>Empleado id: <input type="text" name="empleado_id" value="{{$proyecto->empleado_id}}">
      <input type="submit" name="" value="Guardar">
    </form>
    </table>

@endsection
