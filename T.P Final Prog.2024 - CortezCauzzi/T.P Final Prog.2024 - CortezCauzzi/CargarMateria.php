<?php
require_once 'clases/ControlMateria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    if (empty($_POST['nombre_materia']) || empty($_POST['descripcion_materia']) || empty($_POST['id_materia'])) {
        header("Location: CargarMateria.php?mensaje=Por favor complete todos los campos");
        exit();
    }

    
    $nombre = $_POST['nombre_materia'];
    $descripcion = $_POST['descripcion_materia'];
    $id = $_POST['id_materia'];

    
    $cs = new RepoMateria();

    
    $materiaExistente = $cs->obtenerMateria($nombre);

    if ($materiaExistente) {
        
        $redirigir = "CargarMateria.php?mensaje=Error: La materia ya existe";
    } else {
        
        $resultado = $cs->crearMateria($nombre, $descripcion, $id);

        if ($resultado) {
            $redirigir = "index.php?mensaje=Materia cargada correctamente";
        } else {
            $redirigir = "CargarMateria.php?mensaje=Error: No se pudo cargar la materia";
        }
    }

    
    header("Location: $redirigir");
    exit();
}
