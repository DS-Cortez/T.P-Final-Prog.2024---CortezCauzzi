<?php
require_once 'clases/RepoExamen.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['numero_legajo']) || empty($_POST['materia_examen']) || empty($_POST['fecha_examen']) || empty($_POST['nota_examen'])) {
        header("Location: modificar_examen.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $alumno_numero_legajo = $_POST['numero_legajo'];
    $materia = $_POST['materia_examen'];
    $fecha = $_POST['fecha_examen'];
    $nota = $_POST['nota_examen'];


    $cs = new RepoExamen();

    $resultado = $cs->modificarExamen($alumno_numero_legajo,  $materia, $fecha, $nota);

    if ($resultado) {
        $redirigir = "index.php?mensaje=Nota del examen modificada correctamente";
    } else {
        $redirigir = "ModificarExamen.php?mensaje=Error: No se pudo modificar la fecha";
    }

    header("Location: $redirigir");
    exit();
}



