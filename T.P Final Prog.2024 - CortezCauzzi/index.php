<!doctype html>
<html lang="en">

<head>
    <title>Sistema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>

    <main class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Sistema de Gestion Escolar</h1>
            <p class="lead">Gestiona Usuarios, Materias, Notas y Exámenes</p>
        </div>

        <div class="row mt-4">
            <div class="col-md-3">
                <a href="cargar_usuario.php" class="btn btn-primary w-100 mb-2">Cargar Usuario</a>
            </div>
            <div class="col-md-3">
                <a href="cargar_materia.php" class="btn btn-primary w-100 mb-2">Cargar Materia</a>
                <!-- Botones para Materia -->
                <a href="eliminar_materia.php" class="btn btn-danger w-100 mt-2">Dar de Baja una Materia</a>
                <a href="modificar_materia.php" class="btn btn-success w-100 mt-2">Modificar informacion de materias</a>
                <br><br>
                <a href="ListadoTotalMateria.php" class="btn btn-warning w-100 mt-2">Consultar Materias</a>

            </div>
            <div class="col-md-3">
                <a href="cargar_examen.php" class="btn btn-primary w-100 mb-2">Cargar Examen</a>
                <!-- Botones para Examen -->
                <a href="eliminar_examen.php" class="btn btn-danger w-100 mt-2">Dar de Baja Examen</a>
                <a href="modificar_examen.php" class="btn btn-success w-100 mt-2">Modificar Notas de Examen</a>
                <br><br>
                <a href="ListadoTotalExamen.php" class="btn btn-warning w-100 mt-2">Consultar Examenes</a>

            </div>
            <div class="col-md-3">
                <a href="cargar_alumno.php" class="btn btn-primary w-100 mb-2">Cargar Alumno</a>
                <!-- Botones para Alumno -->
                <a href="eliminar_alumno.php" class="btn btn-danger w-100 mt-2">Eliminar Alumno</a>
                <a href="modificar_alumno.php" class="btn btn-success w-100 mt-2">Modificar Datos Alumno</a>
                <br><br>
                <a href="ListadoTotalAlumno.php" class="btn btn-warning w-100 mt-2">Consultar Alumnos</a>
                <a href="listado_alumno.php" class="btn btn-warning w-100 mt-2">Consultar Notas y Promedios de Alumnos</a>
            </div>
        </div>

    </main>

    <!-- Botón de Logout en el margen inferior derecho -->
    <div class="position-fixed bottom-0 end-0 p-3">
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>

</body>

</html>
