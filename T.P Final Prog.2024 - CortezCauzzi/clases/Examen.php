<?php

class Examen
{
    protected $materia;
    public $nota;
    protected $docente;
    protected $fecha;
    public $alumno;
    public $alumno_numero_legajo;

    

    public function __construct($materia, $nota, $docente, $fecha, $alumno, $alumno_numero_legajo)
    {
        $this->materia = $materia;
        $this->nota = $nota;
        $this->docente = $docente;
        $this->fecha = $fecha;
        $this->alumno = $alumno;
        $this->alumno_numero_legajo = $alumno_numero_legajo;
        
    }

    public function getMateria()
    {
        return $this->materia;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function getDocente()
    {
        return $this->docente;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getAlumno()
    {
        return $this->alumno;
    }

    public function getAlumnoNumeroLegajo()
    {
        return $this->alumno_numero_legajo;
    }

}
