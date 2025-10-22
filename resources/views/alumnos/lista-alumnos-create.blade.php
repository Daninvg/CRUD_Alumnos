<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea alumno</title>
</head>

<body>

    <h1>Cracion de alumnos</h1>

    @include ('Formulario-error')
    <form action="{{ route('alumno.store') }}" method="POST">
        @csrf
        <label for="nombre"> Nombre </label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"><br>

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
</body>

</html>