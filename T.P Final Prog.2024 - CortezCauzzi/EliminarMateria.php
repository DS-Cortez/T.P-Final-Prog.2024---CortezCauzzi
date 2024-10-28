<?php
require_once 'clases/RepoMateria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nombre_materia'])) {
        header("Location: eliminar_materia.php?mensaje=Por favor complete el campo");
        exit();
    }

    $nombre = $_POST['nombre_materia'];

    $cs = new RepoMateria();
    $resultado = $cs->eliminarMateria($nombre);

    if ($resultado) {
        $redirigir = "index.php?mensaje=Materia eliminada correctamente";
    } else {
        $redirigir = "index.php?mensaje=Error: No se pudo eliminar la materia";
    }

    header("Location: $redirigir");
    exit();
}
