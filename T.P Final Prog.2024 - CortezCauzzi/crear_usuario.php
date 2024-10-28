<?php
require_once 'clases/ControlSesion.php';

if (isset($_POST['usuario_empleado']) && isset($_POST['clave_empleado'])) {
    
    $usuario_empleado = $_POST['usuario_empleado'];  
    $clave_empleado = $_POST['clave_empleado']; 

    if (empty($usuario_empleado) || empty($clave_empleado)) {
        $redirigir = 'cargar_usuario.php?mensaje=Todos los campos son obligatorios';
    } else {
        $cs = new ControlSesion();
        
        
        $result = $cs->create( $usuario_empleado, $clave_empleado); 
       
        $message = isset($result[1]) ? $result[1] : 'Ocurrió un error inesperado';
        if ($result[0] === true) {
            $redirigir = 'index.php?mensaje=' . urlencode($message);
        } else {
            $redirigir = 'cargar_usuario.php?mensaje=' . urlencode($message);
        }
    }
} else {
    $redirigir = 'cargar_usuario.php?mensaje=Hay que elegir usuario y clave';
}

header('Location:' . $redirigir);
exit; 
