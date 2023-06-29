@extends('template')

@section('content')

  <div class="max-3-xl mx-auto px-20 py-16 rounded-lg mb-8 bg-blue-700">

    <label for="" class="flex mb-4 ">
      <p class="text-white bg-blue-500 rounded-full px-2 py-1">Nombres: </p>
      <p class="leading-loose text-lg text-white">{{ $paciente->name }}</p> 
    </label>
    
    <label for="" class="flex mb-4 ">
    <p class="text-white bg-blue-500 rounded-full px-2 py-1">Apellidos: </p>
    <p class="leading-loose text-lg text-white">{{ $paciente->lastname }}</p>
    </label>
    
    <label for="" class="flex mb-4 ">
    <p class="text-white bg-blue-500 rounded-full px-2 py-1">DNI: </p>
    <br>
    <p class="leading-loose text-lg text-white">{{ $paciente->dni }}</p>
    </label>

    <label for="" class="flex mb-4 ">
    <p class="text-white bg-blue-500 rounded-full px-2 py-1">Sexo: </p>
    <p class="leading-loose text-lg text-white">{{ $paciente->sex }}</p>
    </label>

    <label for="" class="flex mb-4 ">
    <p class="text-white bg-blue-500 rounded-full px-2 py-1">Edad: </p>
    <p class="leading-loose text-lg text-white">{{ $paciente->age }}</p>
    </label>
  </div>

@endsection