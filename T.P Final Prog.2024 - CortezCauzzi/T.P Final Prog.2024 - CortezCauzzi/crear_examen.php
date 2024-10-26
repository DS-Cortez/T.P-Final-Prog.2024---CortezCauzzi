<?php
require_once 'clases/ControlExamen.php';

$control = new ControlExamen();
$materia = $_POST['materia_examen'];
$nota = $_POST['nota_examen'];
$docente = $_POST['docente_examen'];
$fecha = $_POST['fecha_examen'];
$alumno = $_POST['nombre_alumno'];
$numero_legajo = $_POST['numero_legajo'];


$resultado = $control->crearExamen($materia, $nota, $docente, $fecha, $alumno, $numero_legajo);

if ($resultado) {
    echo "Examen creado exitosamente";
} else {
    echo "Error al crear el examen";
}