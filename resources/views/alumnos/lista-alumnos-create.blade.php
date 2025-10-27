<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <x-mi-layout>

    <h1>Cracion de alumnos</h1>

    {{-- @include ('Formulario-error') --}}
    <form action="{{ route('alumno.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="nombre"> Nombre </label>
            <input class="form-control" type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"><br>
        </div>

        <label for="codigo"> Codigo </label>
        <input type="text" id="codigo" name="codigo" value="{{ old('codigo') }}"><br>

        <label for="correo"> Correo </label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}"><br>

        <label for="fecha_nacimiento"> Fecha de nacimiento </label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">

        <label for="sexo"> Sexo </label>
        <input type="text" id="sexo" name="sexo" value="{{ old('sexo') }}"><br>

        <label for="carrera"> Carrera </label>
        <input type="text" id="carrera" name="carrera" value="{{ old('carrera') }}"><br>

        <button type="submit"> Guardar informacion </button>
    </form>
</x-mi-layout>
</body>
</html>

