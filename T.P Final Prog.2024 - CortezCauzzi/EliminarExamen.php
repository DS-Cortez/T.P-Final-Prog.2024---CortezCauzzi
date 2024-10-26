<?php
require_once 'clases/RepoExamen.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['materia_examen']) || empty($_POST['fecha_examen'])  || empty($_POST['docente_examen']) || empty($_POST['alumno_numero_legajo'] )) {
        header("Location: eliminar_examen.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $materia = $_POST['materia_examen'];
    $fecha= $_POST['fecha_examen'];
    $docente= $_POST['docente_examen'];
    $alumno_numero_legajo = $_POST['alumno_numero_legajo'];

    $cs = new RepoExamen();

     $resultado = $cs->eliminarExamen($materia, $fecha, $docente, $alumno_numero_legajo);

    
    if ($resultado) {
        $redirigir = "index.php?mensaje=Examen eliminado correctamente";
    } else {
        $redirigir = "index.php?mensaje=Error: No se pudo eliminar el examen";
    }

    header("Location: $redirigir");
    exit();
}
