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
        <li> <a href=" route{{ 'alumno.create' }} "> Crear un nuevo alumno </a> 
        </li>
    </ul>
    <table border="1">
        <thead>
            <td>
                <th>ID</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Correo institucional</th>
                <th>Fecha de nacimiento</th>
                <th>Sexo</th>
                <th>Carrera</th>
            </td>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td> {{ $alumno->id }} </td>
                    <td> {{ $alumno->nombre }} </td>
                    <td> {{ $alumno->codigo }} </td>
                    <td> {{ $alumno->correo }} </td>
                    <td> {{ $alumno->fecha_nacimiento }} </td>
                    <td> {{ $alumno->sexo }} </td>
                    <td> {{ $alumno->carrera }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>