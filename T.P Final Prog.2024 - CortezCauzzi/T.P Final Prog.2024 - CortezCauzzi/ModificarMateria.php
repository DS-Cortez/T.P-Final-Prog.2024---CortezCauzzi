<?php
require_once 'clases/RepoMateria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['nombre_actual']) || empty($_POST['nueva_descripcion'])) {
        header("Location: modificar_materia.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    $nombre = $_POST['nombre_actual'];
    $descripcion = $_POST['nueva_descripcion'];

    $cs = new RepoMateria();

    
    $materia = $cs->obtenerMateria($nombre);
    if ($materia) {
        
        $resultado = $cs->modificarMateria($nombre, $descripcion);

        if ($resultado) {
            $redirigir = "index.php?mensaje=Descripcion de la materia modificado correctamente";
        } else {
            $redirigir = "modificar_materia.php?mensaje=Error: No se pudo modificar la descripcion de la materia";
        }
    } else {
        $redirigir = "index.php?mensaje=Error: No se encontró la materia";
    }

    header("Location: $redirigir");
    exit();
}

