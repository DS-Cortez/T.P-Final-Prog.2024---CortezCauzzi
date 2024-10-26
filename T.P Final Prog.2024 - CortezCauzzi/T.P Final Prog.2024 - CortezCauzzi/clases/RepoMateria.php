<?php

require_once 'conexion.php';  
require_once 'clases/Materia.php';

class RepoMateria
{
    private static $conexion = null;

    public function __construct()
    {
        $credenciales = credenciales();
        if (is_null(self::$conexion)) {
            self::$conexion = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['clave'],
                $credenciales['base_de_datos']
            );
        }
        if (self::$conexion->connect_error) {
            die('Error de conexión: ' . self::$conexion->connect_error);
        }
        self::$conexion->set_charset('utf8mb4');
    }

    
    public function crearMateria($nombre, $descripcion, $id)
    {
        $q = "INSERT INTO materia (nombre, descripcion, idMateria) VALUES (?, ?, ?)";
        $query = self::$conexion->prepare($q);
        $query->bind_param("sss", $nombre, $descripcion, $id);
        return $query->execute();
    }

    
    public function obtenerMateria($nombre)
    {
        $q = "SELECT * FROM materia WHERE nombre = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("s", $nombre);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    
    public function eliminarMateria($nombre)
    {
        $q = "DELETE FROM materia WHERE nombre = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("s", $nombre);
        return $query->execute();
    }

    
    public function modificarMateria($nombre, $descripcion)
    {
        $q = "UPDATE materia SET descripcion = ? WHERE nombre = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ss", $descripcion, $nombre);
        return $query->execute();
    }
}
