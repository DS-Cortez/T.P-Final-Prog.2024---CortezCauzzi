<?php
class Alumno{
    private $id_alumno;
    private $numero_legajo;
    private $nombre;
    private $apellido;
    private $dni;
    private $email;
    

    public function __construct($id_alumno, $numero_legajo, $nombre, $apellido, $dni, $email) {
        $this->id_alumno = $id_alumno;
        $this->numero_legajo = $numero_legajo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->email = $email;
    }

    public function getIdAlumno() {
        return $this->id_alumno;
    }

    public function getNumLegajo() {
        return $this->numero_legajo;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getEmail() {
        return $this->email;
    }


}