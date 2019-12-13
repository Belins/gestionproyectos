@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
      </tr>
      <tr>
        @if($departamento)
          <td>{{$departamento->id}}</td>
          <td>{{$departamento->nombre}}</td>
        @endif
      </tr>
      

    </table>

@endsection