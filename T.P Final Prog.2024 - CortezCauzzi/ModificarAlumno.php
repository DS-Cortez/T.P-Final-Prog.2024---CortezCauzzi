<?php
require_once 'clases/RepoAlumno.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (empty($_POST['numero_legajo']) || empty($_POST['nombre_alumno']) || empty($_POST['apellido_alumno']) || empty($_POST['dni_alumno']) || empty($_POST['email_alumno'])) {
        header("Location: modificar_alumno.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $numero_legajo = ($_POST['numero_legajo']);
    $nombre = ($_POST['nombre_alumno']);
    $apellido = ($_POST['apellido_alumno']);
    $dni = ($_POST['dni_alumno']);
    $email = ($_POST['email_alumno']);

    $cs = new RepoAlumno();


    $alumno = $cs->obtenerAlumno( $numero_legajo);
    
    if ($alumno) {

        $resultado = $cs->modificarAlumno($numero_legajo, $nombre, $apellido, $dni, $email);

        if ($resultado) {
            $redirigir = "index.php?mensaje=Datos del alumno modificados correctamente";
        } else {
            $redirigir = "modificar_alumno.php?mensaje=Error: No se pudo modificar los datos del alumno";
        }
    } else {
        $redirigir = "index.php?mensaje=Error: No se encontró al alumno";
    }


    header("Location: $redirigir");
    exit();
}

