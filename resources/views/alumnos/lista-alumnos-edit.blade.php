<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>


<x-encabezado>
    Editar alumno: {{$alumno->nombre}}
</x-encabezado>
    
<x-Formulario-error/>
    <form action="{{ route('alumno.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre"> Nombre </label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="codigo"> Codigo </label>
        <input type="text" id="codigo" name="codigo">
        <br>
        <label for="correo"> Correo </label>
        <input type="email" id="correo" name="correo">
        <br>
        <label for="fecha_nacimiento"> Fecha de nacimiento </label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
        <br>
        <label for="sexo"> Sexo </label>
        <input type="text" id="sexo" name="sexo">
        <label for="carrera"> Carrera </label>
        <input type="text" id="carrera" name="carrera">

        <button type="submit"> Guardar informacion </button>
    </form>
</body>

</html>