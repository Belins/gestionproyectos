@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
    </tr>
    @foreach($listadoDepartamentos as $departamento)
    <tr>
      <td>{{$departamento->id}}</td>
      <td><a href="{{route('departamentos.show', $departamento->id)}}">Ver</a></td>
    </tr>
    @endforeach
  </table>

@endsection
