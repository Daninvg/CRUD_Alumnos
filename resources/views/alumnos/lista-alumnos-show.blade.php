<x-mi-layout>
    <h1>Mostrar alumnos</h1>
    <p>¿Regresara al menu?</p>
    <p> <a href="{{route('alumno.index')}}">-Regresar-</a></p>

    <h1>Nombre de alumno: {{ $alumno->nombre }}</h1>
    <p>
        <strong>Codigo: </strong>
        {{$alumno->codigo}} <br>

        <Strong>Correo: </Strong>
        {{$alumno->correo}} <br>

        <Strong>Fecha de nacimiento: </Strong>
        {{$alumno->fecha_nacimiento}} <br>

        <strong>Sexo: </strong>
        {{$alumno->sexo}} <br>

        <Strong>Carrera: </Strong>
        {{$alumno->carrera}}
    </p>
</x-mi-layout>