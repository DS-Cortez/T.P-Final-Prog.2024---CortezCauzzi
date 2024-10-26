<?php
class Usuario {

    private $usuario_empleado;
    private $clave_empleado;

    public function __construct( $usuario_empleado, $clave_empleado) {
        $this->usuario_empleado = $usuario_empleado;
        $this->clave_empleado = $clave_empleado;
    }

    public function getUsuarioEmpleado() {
        return $this->usuario_empleado;
    }

    public function getClaveEmpleado() {
        return $this->clave_empleado;
    }
}
