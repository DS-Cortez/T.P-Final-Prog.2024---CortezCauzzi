<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Examen</title>
    <link rel="stylesheet" href="CSS/modificar_examen.css">
</head>

<body>
    <?php
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
    ?>

    <section id="modificarexamen">
        <h2>Modificar los datos de un examen</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="ModificarFecha.php" method="post">
                <input type="text" id="materia" name="materia_examen" placeholder="Materia" required>
                <input type="date" id="fecha" name="fecha_examen" placeholder="Fecha" required>
                <input type="number" id="nota" name="nota_examen" placeholder="Nota" required>
                <input type="text" id="legajoAlumno" name="numero_legajo" placeholder="Legajo del alumno" required>
                <button type="submit">Modificar datos del examen</button>
            </form>
        </div>
    </section>
</body>
</html>
