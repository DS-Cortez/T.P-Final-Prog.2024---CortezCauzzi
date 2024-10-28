<?php

require_once 'clases/RepoAlumno.php';

class ControlAlumno
{
    public function crearAlumno($nombre, $apellido, $dni, $numero_legajo, $email)
    {
        $repo = new RepoAlumno();
        return $repo->crearAlumno($nombre, $apellido, $dni, $numero_legajo, $email);
    }

    public function obtenerAlumno( $numero_legajo)
    {
        $repo = new RepoAlumno();
        return $repo->obtenerAlumno( $numero_legajo);
    }

    public function eliminarAlumno($dni, $numero_legajo)
    {
        $repo = new RepoAlumno();
        return $repo->eliminarAlumno($dni, $numero_legajo);
    }

    public function modificarAlumno($numero_legajo, $nombre, $apellido, $dni, $email)
    {
        $repo = new RepoAlumno();
        return $repo->modificarAlumno($numero_legajo, $nombre, $apellido, $dni, $email);
    }
}
