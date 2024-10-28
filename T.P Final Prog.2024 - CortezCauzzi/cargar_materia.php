<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Materia</title>
    <link rel="stylesheet" href="CSS/cargar_materia.css">
</head>

<body>
    <?php
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
    ?>

    <section id="cargarmateria">
        <h2>Cargar una nueva materia</h2><hr><br>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="CargarMateria.php" method="post">
                <input type="text" id="nombre" name="nombre_materia" placeholder="Nombre de la materia" required>
                <textarea id="descripcion" name="descripcion_materia" placeholder="Descripción de la materia" rows="4" required></textarea>
                <input type="text" id="idMateria" name="id_materia" placeholder="Ingrese un ID para la materia"required>

                <button type="submit">Cargar Materia</button>
            </form>
        </div>
    </section>

    <a href="index.php" class="btn btn-primary" style="position: absolute; top: 10px; left: 10px;">Volver al inicio</a>

</body>
</html>
