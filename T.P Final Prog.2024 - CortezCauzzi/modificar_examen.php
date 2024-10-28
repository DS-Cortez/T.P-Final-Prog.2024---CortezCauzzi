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
        <h2>Modificar la nota de un examen</h2><hr><br>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="ModificarExamen.php" method="post">
                <h3>Ingrese los datos del alumno y examen para modificar</h3>
                <input type="text" id="numero_legajo" name="numero_legajo" placeholder="Legajo del alumno" required>
                <input type="text" id="materia" name="materia_examen" placeholder="Materia" required>
                <input type="date" id="fecha" name="fecha_examen" placeholder="Fecha" required>
                <hr><br>
                <h3>Ingrese la nueva nota del examen</h3>
                <input type="number" id="nota" name="nota_examen" placeholder="Nota" required>
                <button type="submit">Modificar datos del examen</button>
            </form>
        </div>
    </section>

    <a href="index.php" class="btn btn-primary" style="position: absolute; top: 10px; left: 10px;">Volver al inicio</a>

</body>
</html>
