<?php
require_once 'clases/ControlAlumno.php';

$control = new ControlAlumno();
$nombre = $_POST['nombre_alumno'];
$apellido = $_POST['apellido_alumno'];
$dni = $_POST['dni_alumno'];
$email = $_POST['email_alumno'];

$numero_legajo = generarNumeroLegajo(6);

function generarNumeroLegajo($longitud = 6) {
    $caracteres = '0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
    $numero_legajo = '';
    
    for ($i = 0; $i < $longitud; $i++) {
        $numero_legajo .= $caracteres[random_int(0, strlen($caracteres) - 1)];
    }

    return $numero_legajo;
}



$resultado = $control->crearAlumno($nombre, $apellido, $dni, $numero_legajo, $email);

if ($resultado) {
    echo "Alumno ingresado exitosamente";
} else {
    echo "Error al ingresar al alumno";
}
