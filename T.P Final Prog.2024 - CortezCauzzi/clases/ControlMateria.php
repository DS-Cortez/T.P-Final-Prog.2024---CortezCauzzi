<?php

require_once 'clases/RepoMateria.php';

class ControlMateria
{
    
    public function crearMateria($nombre, $descripcion, $id)
    {
        $repo = new RepoMateria();
        return $repo->crearMateria($nombre, $descripcion, $id);
    }

    
    public function obtenerMateria($nombre)
    {
        $repo = new RepoMateria();
        return $repo->obtenerMateria($nombre);
    }

   
    public function eliminarMateria($nombre)
    {
        $repo = new RepoMateria();
        return $repo->eliminarMateria($nombre);
    }

    
    public function modificarMateria($nombre, $descripcion)
    {
        $repo = new RepoMateria();
        return $repo->modificarMateria($nombre, $descripcion);
    }
}
