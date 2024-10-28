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
    <title>Eliminar Examen</title>
    <link rel="stylesheet" href="CSS/eliminar_examen.css">
</head>
    <section id="eliminarexamen">
        <h2>Eliminar un examen</h2><hr><br>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="EliminarExamen.php" method="post">
                <input type="text" id="materia" name="materia_examen" placeholder="Materia" required>
                <input type="date" id="fecha" name="fecha_examen" required>
                <input type="text" id="docente" name="docente_examen" placeholder="Docente" required>
                <input type="text" id="legajo" name="alumno_numero_legajo" placeholder="Legajo del alumno" required>

                <button type="submit">Eliminar examen</button>
            </form>
        </div>
    </section>

    <a href="index.php" class="btn btn-primary" style="position: absolute; top: 10px; left: 10px;">Volver al inicio</a>

</body>
</html>
