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
    <title>Cargar Examen</title>
    <link rel="stylesheet" href="CSS/cargar_examen.css">
</head>
    <section id="nuevoexamen">
        <h2>Cargar un nuevo examen</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="crear_examen.php" method="post">
                <input type="text" id="materia" name="materia_examen" placeholder="Materia" required>
                <input type="number" id="nota" name="nota_examen" placeholder="Nota" required>
                <input type="text" id="docente" name="docente_examen" placeholder="Docente" required>
                <input type="date" id="fecha" name="fecha_examen" >
                <input type="text" id="idAlumno" name="nombre_alumno" placeholder="Nombre y Apellido del alumno" required>
                <input type="text" id="legajoAlumno" name="numero_legajo" placeholder="Numero de legajo del Alumno" required>
                <button type="submit">Cargar nuevo examen</button>
            </form>
        </div>
    </section>
</body>
</html>
