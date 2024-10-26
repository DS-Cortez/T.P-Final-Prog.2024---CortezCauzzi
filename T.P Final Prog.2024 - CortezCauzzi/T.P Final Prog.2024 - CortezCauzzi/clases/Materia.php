<?php
class Materias {
    
    private $nombre;
    private $descripcion;

    public function __construct($nombre, $descripcion) 
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }


    public function getNombreMateria() {
        return $this->nombre;
    }

    public function getDescripcionMateria() {
        return $this->descripcion;
    }
}