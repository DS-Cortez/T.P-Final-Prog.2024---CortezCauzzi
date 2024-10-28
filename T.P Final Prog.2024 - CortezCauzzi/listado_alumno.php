<?php
    if (isset($_GET['mensaje'])) {
        echo '<div id="mensaje" class="alert alert-primary text-center">
            <p>'.$_GET['mensaje'].'</p></div>';
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de alumnos</title>
    <link rel="stylesheet" href="CSS/listado_alumno.css">
</head>
    <section id="listadoalumno">
        <h2>Buscar alumno</h2>
        <h2>Ingrese el nombre:</h2>
        <div class="container">
            <form action="ListadoAlumno.php" method="post">
                <input type="text" id="nombre" name="nombre_alumno" placeholder="Nombre del alumno" required>
                <input type="text" id="apellido" name="apellido_alumno" placeholder="Apellido del alumno" required>
                <input type="text" id="legajo" name="numero_legajo" placeholder="Numero de legajo" required>

                <button type="submit">Buscar alumno</button>
            </form>
        </div>
    </section>

    <a href="index.php" class="btn btn-primary" style="position: absolute; top: 10px; left: 10px;">Volver al inicio</a>

</body>
</html>