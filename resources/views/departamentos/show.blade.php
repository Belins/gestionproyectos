@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Empleados</th>
      </tr>
      <tr>
        @if($departamento)
          <td>{{$departamento->id}}</td>
          <td>{{$departamento->nombre}}</td>
          @if($departamento->empleados)
          <td>
            @foreach ($departamento->empleados as $empleado)
              <a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->nombre}}</a>
            @endforeach
          </td>
          @endif
        @endif
      </tr>
      

    </table>

@endsection