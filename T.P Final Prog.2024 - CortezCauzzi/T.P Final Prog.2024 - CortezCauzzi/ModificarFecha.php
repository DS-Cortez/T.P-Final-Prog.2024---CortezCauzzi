<?php
require_once 'clases/RepoExamen.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['materia_examen']) || empty($_POST['fecha_examen']) || empty($_POST['nota_examen']) || empty($_POST['numero_legajo'])) {
        header("Location: Modificar_fecha.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $materia = $_POST['materia_examen'];
    $fecha = $_POST['fecha_examen'];
    $nota = $_POST['nota_examen'];
    $alumno_numero_legajo = $_POST['numero_legajo'];



    
    $cs = new RepoExamen();

    
    /*$examen = $cs->obtenerExamen($materia, $fecha,$alumno_numero_legajo);
    if ($examen) {
        
        $resultado = $repoExamen->modificarExamen($materia, $fecha, $alumno_numero_legajo);

        if ($resultado) {
            $redirigir = "index.php?mensaje=Fecha del examen modificada correctamente";
        } else {
            $redirigir = "ModificarFecha.php?mensaje=Error: No se pudo modificar la fecha";
        }
    } else {
        $redirigir = "index.php?mensaje=Error: No se encontró el examen";
    }

    header("Location: $redirigir");
    exit();*/


 
    $resultado = $cs->modificarExamen($materia,  $nota, $fecha, $alumno_numero_legajo);

    if ($resultado) {
        $redirigir = "index.php?mensaje=Fecha del examen modificada correctamente";
    } else {
        $redirigir = "ModificarFecha.php?mensaje=Error: No se pudo modificar la fecha";
    }

    header("Location: $redirigir");
    exit();
}



