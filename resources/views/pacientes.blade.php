@extends('template')

@section('content')
  <h1>Listado de Pacientes</h1>
  @foreach($pacientes as $paciente)
  <p>
  <strong>{{ $paciente->id }}</strong>
    <strong>{{ $paciente->name }}</strong>
    <a href="{{ route('paciente' , $paciente->id ) }}">...</a>
    <br>
    <span>{{ $paciente->user->name }}</span>
  </p>
  @endforeach

  {{ $pacientes->links() }}
@endsection