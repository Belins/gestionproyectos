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
        <th>Empleado</th>
        <th>Actualizar</th>
        <th>Borrar</th>
      </tr>
      @foreach($listadoProyectos as $proyecto)
      <tr>
        <td>{{$proyecto->id}}</td>
        <td><a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->nombre}}</a></td>
        <td>{{$proyecto->titulo}}</td>
        @isset($proyecto->empleado_id)<td><a href="{{route('empleados.show', $proyecto->empleado_id)}}">{{$proyecto->empleado->nombre}}</a></td>@endisset
        <td><button class="bg-primary"><a class="text-dark" href="{{route('proyectos.edit', $proyecto->id)}}">Editar</a></button></td>
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
