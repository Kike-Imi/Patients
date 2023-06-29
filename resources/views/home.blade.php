@extends('template')

@section('content')
<div class="bg-blue-700 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
  <span class="text-xs uppercase text-white bg-blue-500 rounded-full px-2 py-1">Programación</span>
  <h1 class="text-3xl text-white mt-4">Pacientes</h1>
  <p class="text-sm text-white mt-2">Proyecto de Desarrollo Web</p>

  <img src="/../../images/banner.png" class="absolute -right-20 -bottom-1 ">
</div>

<div class="px-4">
  <h1 class="text-2xl mb-8 text-gray-900">Registro de Pacientes</h1>

  <div class="grid grid-cols-1 gap-4 mb-4">
    @foreach($pacientes as $patient)
    <a href="{{ route('paciente', $patient->id) }}" class="bg-blue-700 rounded-lg px-6 py-4">
      <p class="text-xs flex items-center gap-2">
        <span class="uppercase text-white bg-blue-500 rounded-full px-2 py-1">Paciente</span>
        <span class="" >{{ $patient->created_at->format('d/m/Y') }}</span>
      </p>

      <h2 class="text-lg text-white mt-">{{ $patient->name }}</h2>

      <div class="text-xs text-white opacity-75 flex items-center gap-1">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
      </svg>

        {{ $patient->user->name }}
      </div>
    </a>
    @endforeach
  </div>
  {{ $pacientes->links() }}
</div>
@endsection