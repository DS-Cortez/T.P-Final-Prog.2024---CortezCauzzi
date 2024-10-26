<?php
require_once 'clases/RepoUsuario.php';
require_once 'clases/Usuario.php';

class ControlSesion
{
    public function login($usuario_empleado, $clave_empleado)
    {
        $repo = new RepoUsuario();
        $usuario = $repo->login($usuario_empleado, $clave_empleado);

        if ($usuario === false) {
            throw new Exception("Credenciales incorrectas");
        }

        session_start();
        $_SESSION['usuario_empleado'] = serialize($usuario_empleado);
        return [true, "Usuario cargado correctamente"];
    }

    
    public function create($usuario_empleado, $clave_empleado)
    {
        $repo = new RepoUsuario();
        $usuario = new Usuario($usuario_empleado, $clave_empleado);

        $usuario_empleado = $usuario->getUsuarioEmpleado();
        $clave_empleado = $usuario->getClaveEmpleado();
    
        $repo ->create($usuario_empleado, $clave_empleado);
        session_start();
        $_SESSION['usuario_empleado'] = serialize($usuario_empleado);
        return [true, "Usuario creado exitosamente"];
    }
}
