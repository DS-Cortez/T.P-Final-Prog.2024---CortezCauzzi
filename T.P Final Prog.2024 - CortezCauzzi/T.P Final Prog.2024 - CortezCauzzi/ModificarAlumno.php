<?php
/*require_once 'RepoAlumno.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['nombre_alumno']) || empty($_POST['apellido_alumno']) || empty($_POST['dni_alumno']) || empty($_POST['legajo_alumno']) || empty($_POST['email_alumno'])) {
        header("Location: modificar_alumno.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $nombre= $_POST['nombre_alumno'];
    $apellido= $_POST['apellido_alumno'];
    $dni= $_POST['dni_alumno'];
    $numero_legajo= $_POST['legajo_alumno'];
    $email= $_POST['email_alumno'];

    
    $repoAlumno = new RepoAlumno();

    
    $alumno = $repoAlumno->obtenerAlumno($dni, $numero_legajo);
    if ($alumno) {
        
        $resultado = $repoAlumno->modificarAlumno($nombre, $apellido, $email, $dni, $numero_legajo);

        if ($resultado) {
            $redirigir = "index.php?mensaje=Datos del alumno modificados correctamente";
        } else {
            $redirigir = "ModificarAlumno.php?mensaje=Error: No se pudo modificar los datos del alumno";
        }
    } else {
        $redirigir = "index.php?mensaje=Error: No se encontró al alumno";
    }

    header("Location: $redirigir");
    exit();
} */


require_once 'clases/RepoAlumno.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validar que todos los campos sean enviados correctamente y no estén vacíos
    if (empty(trim($_POST['legajo_alumno'])) || empty(trim($_POST['nombre_alumno'])) || 
        empty(trim($_POST['apellido_alumno'])) || empty(trim($_POST['dni_alumno'])) || 
        empty(trim($_POST['email_alumno']))) {
        
        header("Location: modificar_alumno.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    // Obtener los datos del formulario
    $numero_legajo = trim($_POST['legajo_alumno']);
    $nombre = trim($_POST['nombre_alumno']);
    $apellido = trim($_POST['apellido_alumno']);
    $dni = trim($_POST['dni_alumno']);
    $email = trim($_POST['email_alumno']);

    $cs = new RepoAlumno();


    $alumno = $cs->obtenerAlumno($dni, $numero_legajo);
    
    if ($alumno) {

        $resultado = $cs->modificarAlumno($nombre, $apellido, $dni, $numero_legajo, $email);

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

