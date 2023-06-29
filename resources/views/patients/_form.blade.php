@csrf

<div class="flex justify-between items-center col-12">
  <label for="" class="uppercase text-xs">Nombre</label>
  <span class="text-xs text-red-600"> @error('name')  {{ $message }} @enderror</span>
  <input type="text" name="name" class="rounded border-gray-200 w-full mb-4 text-gray-700" value="{{ old('name', $patient->name) }}">
</div>
<div class="flex justify-between items-center">
  <label for="" class="uppercase text-xs">Apellido</label>
  <span class="text-xs text-red-600"> @error('lastname' ) {{ $message }} @enderror</span>
  <input type="text" name="lastname" class="rounded border-gray-200 w-full mb-4 text-gray-700" value="{{ old('lastname', $patient->lastname) }}">
</div>
<div class="flex justify-between items-center">
  <label for="" class="uppercase text-xs">DNI</label>
  <span class="text-xs text-red-600"> @error('dni')  {{ $message }} @enderror</span>
  <input type="text" name="dni" class="rounded border-gray-200 w-full mb-4 text-gray-700" value="{{ old('dni', $patient->dni) }}">
</div>
<div class="flex justify-between items-center">
  <label for="" class="uppercase text-xs">Sexo</label>
  <span class="text-xs text-red-600"> @error('sex')  {{ $message }} @enderror</span>
  <input type="text" name="sex" class="rounded border-gray-200 w-full mb-4 text-gray-700" value="{{ old('sex', $patient->sex) }}">
</div>
<div class="flex justify-between items-center">
  <label for="" class="uppercase text-xs">Edad</label>
  <span class="text-xs text-red-600"> @error('age')  {{ $message }} @enderror</span>
  <input type="text" name="age" class="rounded border-gray-200 w-full mb-4 text-gray-700" value="{{ old('age', $patient->age) }}">
</div>
<div class="flex justify-between items-center">
  <a href="{{ route('patients.index') }}" class="text-indigo-600">Volver</a>
  <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>