@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
      </tr>
      @foreach($listadoEmpleados as $empleado)
      <tr>
        <td>{{$empleado->id}}</td>
        <td><a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->nombre}}</a></td>
      </tr>
      @endforeach

    </table>

@endsection
