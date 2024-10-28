<?php
require_once 'clases/RepoAlumno.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['dni_alumno']) || empty($_POST['numero_legajo'])) {
        header("Location: eliminar_alumno.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $dni = $_POST['dni_alumno'];
    $numero_legajo= $_POST['numero_legajo'];

    $cs = new RepoAlumno();

     $resultado = $cs->eliminarAlumno($dni, $numero_legajo);

    
    if ($resultado) {
        $redirigir = "index.php?mensaje=Alumno eliminado correctamente";
    } else {
        $redirigir = "index.php?mensaje=Error: No se pudo eliminar al alumno";
    }

    header("Location: $redirigir");
    exit();
}