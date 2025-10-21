<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea alumno</title>
</head>

<body>

    <h1>Cracion de alumnos</h1>

    <form action="" method="POST">
        @crsf
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