<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Materia</title>
    <link rel="stylesheet" href="CSS/modificar_materia.css">
</head>

<body>
    <?php
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
    ?>

    <section id="modificarmateria">
        <h2>Modificar el nombre de una materia</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="ModificarMateria.php" method="post">
                <input type="text" id="nombre_actual" name="nombre_actual" placeholder="Nombre Actual" required>
                <textarea type="text" id="nueva_descripcion" name="nueva_descripcion" placeholder="Nuevo Descripcion" required></textarea>
                <button type="submit">Modificar Materia</button>
            </form>
        </div>
    </section>
</body>
</html>
