<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="CSS/cargar_usuario.css">

</head>

<body>
        <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>'.$_GET['mensaje'].'</p></div>';
            }
        ?>

    <section id="nuevousuario">
            <h2>Crear un nuevo usuario</h2><hr><br>
            <h2>Complete los siguientes campos:</h2>
            <div class="container">
                <form action="crear_usuario.php" method="post">
        
                    <input type="text" id="nombre" name="usuario_empleado" placeholder= "usuario" required>
      
                    <input type="text" id="apellido" name="clave_empleado" placeholder= "clave" required>
                                                      
                    <button type="submit">Cargar nuevo usuario</button>
                </form>
            </div>
        </section>

    </body>
</html>