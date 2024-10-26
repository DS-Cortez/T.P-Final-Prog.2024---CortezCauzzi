<?php

require_once 'clases/RepoAlumno.php';

class ControlAlumno
{
    public function crearAlumno($nombre, $apellido, $dni, $numero_legajo, $email)
    {
        $repo = new RepoAlumno();
        return $repo->crearAlumno($nombre, $apellido, $dni, $numero_legajo, $email);
    }

    public function obtenerAlumno($dni, $numero_legajo)
    {
        $repo = new RepoAlumno();
        return $repo->obtenerAlumno($dni, $numero_legajo);
    }

    public function eliminarAlumno($dni, $numero_legajo)
    {
        $repo = new RepoAlumno();
        return $repo->eliminarAlumno($dni, $numero_legajo);
    }

    public function modificarAlumno($nombre, $apellido, $dni, $numero_legajo, $email)
    {
        $repo = new RepoAlumno();
        return $repo->modificarAlumno($nombre, $apellido, $dni, $numero_legajo, $email);
    }
}
