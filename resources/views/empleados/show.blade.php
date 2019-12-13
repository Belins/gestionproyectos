@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Proyecto</th>
        <th>Departamento</th>
        <th>Colaboraciones</th>
        <th>Jefe de</th>
      </tr>
      <tr>
        @if($empleado)

          <td>{{$empleado->id}}</td>
          <td>{{$empleado->nombre}}</td>
          <td>{{$empleado->email}}</td>
          <td>{{$empleado->telefono}}</td>
          @if($empleado->proyecto)
            <td><a href="{{route('proyectos.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></td>
            @else
            <td>No</td>
          @endif
          @if($empleado->departamento->id)
            <td><a href="{{route('departamentos.show', $empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a></td>
            @else
            <td>No</td>
          @endif
          @if($empleado->proyectos)
            <td>
              @foreach($empleado->proyectos as $proyecto)
                <a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->nombre}}</a>
              @endforeach
            </td>
            @else
            <td>No</td>
          @endif
          @if($empleado->jefedepartamento)
            <td><a href="">{{$empleado->jefedepartamento->nombre}}</a></td>
            @else
            <td>No</td>
          @endif
        @endif
      </tr>
      

    </table>

@endsection