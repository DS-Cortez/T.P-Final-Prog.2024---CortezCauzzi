<?php

require_once 'clases/RepoExamen.php';

class ControlExamen
{
    public function crearExamen($materia, $nota, $docente, $fecha, $alumno, $alumno_numero_legajo)
    {
        $repo = new RepoExamen();
        return $repo->crearExamen($materia, $nota, $docente, $fecha, $alumno, $alumno_numero_legajo);
    }

    public function obtenerExamen($materia, $fecha, $alumno_numero_legajo)
    {
        $repo = new RepoExamen();
        return $repo->obtenerExamen($materia, $fecha,  $alumno_numero_legajo);
    }

    public function eliminarExamen($materia, $fecha, $docente, $alumno_numero_legajo)
    {
        $repo = new RepoExamen();
        return $repo->eliminarExamen($materia, $fecha, $docente, $alumno_numero_legajo);
    }

    public function modificarExamen($materia, $nota, $fecha, $alumno_numero_legajo)
    {
        $repo = new RepoExamen();
        return $repo->modificarExamen($materia, $nota, $fecha, $alumno_numero_legajo);
    }
}