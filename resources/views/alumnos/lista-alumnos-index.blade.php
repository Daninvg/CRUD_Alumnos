<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>

<body>
    <h1>Vista para alumnos</h1>
    <ul>
        <li> <a href="{{ route('alumno.create') }} "> Crear un nuevo alumno </a>
        </li>
    </ul>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Correo institucional</th>
                <th>Fecha de nacimiento</th>
                <th>Sexo</th>
                <th>Carrera</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td> {{ $alumno->id }} </td>
                <td> <a href="{{ route('alumno.show', $alumno->id) }}"> {{ $alumno->nombre }} </a></td>
                <td> {{ $alumno->codigo }} </td>
                <td> {{ $alumno->correo }} </td>
                <td> {{ $alumno->fecha_nacimiento }} </td>
                <td> {{ $alumno->sexo }} </td>
                <td> {{ $alumno->carrera }} </td>
                <td> <a href="{{ route('alumno.edit', $alumno->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('alumno.destroy', $alumno->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Eliminar registro </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>