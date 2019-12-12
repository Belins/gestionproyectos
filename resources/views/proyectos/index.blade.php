@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
    <button class="btn-success"><a href="{{route('proyectos.create')}}" class="text-dark"> Crear Proyecto</a></button>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Id Empleado</th>
        <th>Empleado</th>
        <th>Actualizar</th>
        <th>Borrar</th>
      </tr>
      @foreach($listadoProyectos as $proyecto)
      <tr>
        <td>{{$proyecto->id}}</td>
        <td><a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->nombre}}</a></td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td>{{$proyecto->empleado_id}}</td>
        @isset($proyecto->empleado_id)<td>{{$proyecto->empleado->nombre}}</td>@endisset
        <td><button class="bg-primary"><a href="{{route('proyectos.edit', $proyecto->id)}}">Actualizar</a></button></td>
        <td>
        <form action="{{route('proyectos.destroy', $proyecto->id)}}" method="POST">
          @csrf
          @METHOD('DELETE')
          <button class="bg-danger">Borrar</button>
        </form>
        </td>
      </tr>
      @endforeach
    </table>

@endsection
