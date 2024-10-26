<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Alumno</title>
    <link rel="stylesheet" href="CSS/modificar_alumno.css">
</head>

<body>
    <?php 
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                <p>'.$_GET['mensaje'].'</p></div>';
        }
    ?>

    <section id="modificarAlumno">
        <h2>Modificar los datos de un alumno</h2>
        <h2>Complete los siguientes campos:</h2>
        <div class="container">
            <form action="ModificarAlumno.php" method="post">
                <h3>Ingrese el Nro. de Legajo del alumno para modificar sus datos</h3>
                <input type="text" id="numero_legajo" name="legajo_alumno" placeholder="Numero de Legajo" required>
                <hr>
                <input type="text" id="nombre" name="nombre_alumno" placeholder="Nombre" required>
                <input type="text" id="apellido" name="apellido_alumno" placeholder="Apellido" required>
                <input type="number" id="dni" name="dni_alumno" placeholder="DNI" required>
                <input type="text" id="email" name="email_alumno" placeholder="Email" required>
                <button type="submit">Modificar datos del alumno</button>
            </form>
        </div>
    </section>
</body>
</html>
