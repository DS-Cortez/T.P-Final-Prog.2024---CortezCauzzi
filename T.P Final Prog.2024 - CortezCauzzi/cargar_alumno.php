<?php
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Alumno</title>
    <link rel="stylesheet" href="CSS/cargar_alumno.css">
</head>
    <section id="nuevoalumno">
        <h2>Ingresar un nuevo alumno</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="crear_alumno.php" method="post">
                <input type="text" id="nombre" name="nombre_alumno" placeholder="Nombre" required>
                <input type="text" id="apellido" name="apellido_alumno" placeholder="Apellido" required>
                <input type="number" id="dni" name="dni_alumno" placeholder="DNI" required>
                <input type="text" id="email" name="email_alumno" placeholder="Email">
                <button type="submit">Cargar nuevo alumno</button>
            </form>
        </div>
    </section>
</body>
</html>