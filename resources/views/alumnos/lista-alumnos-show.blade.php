<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar alumnos</title>
</head>

<body>
    <h1>Mostrar alumnos</h1>
    <p>¿Regresara al menu?</p>
    <p> <a href="{{route('alumno.index')}}">-Regresar-</a></p>

    <h1>Nombre de alumno: {{ $alumno->nombre }}</h1>
    <p>
        <strong>Codigo: </strong>
        {{$alumno->codigo}}

        <Strong>Correo: </Strong>
        {{$alumno->correo}}

        <Strong>Fecha de nacimiento: </Strong>
        {{$alumno->fecha_nacimiento}}

        <strong>Sexo: </strong>
        {{$alumno->sexo}}

        <Strong>Carrera: </Strong>
        {{$alumno->carrera}}
    </p>
</body>

</html>