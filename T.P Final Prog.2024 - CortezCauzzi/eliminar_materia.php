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
    <title>Eliminar Materia</title>
    <link rel="stylesheet" href="CSS/eliminar_materia.css">
</head>
<body>
    <section id="eliminarmateria">
        <h2>Eliminar una materia</h2>
        <h2>Complete el siguiente campo:</h2>
        <div class="container">
            <form action="EliminarMateria.php" method="post">
                <input type="text" id="materia" name="nombre_materia" placeholder="Nombre de la Materia" required>
                <button type="submit">Eliminar Materia</button>
            </form>
        </div>
    </section>
</body>
</html>
