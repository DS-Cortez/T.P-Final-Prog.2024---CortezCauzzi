<?php

require_once 'conexion.php';  
require_once 'clases/Alumno.php';

class RepoAlumno
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

    public function crearAlumno($nombre, $apellido, $dni, $numero_legajo, $email)
    {
        $q = "INSERT INTO alumno (nombre, apellido, dni, numero_legajo, email) VALUES (?, ?, ?, ?, ?)";
        $query = self::$conexion->prepare($q);
        $query->bind_param("sssss", $nombre, $apellido, $dni, $numero_legajo, $email);

        return $query->execute();
    }

    public function obtenerAlumno($dni, $numero_legajo)
    {
        $q = "SELECT * FROM alumno WHERE dni =? AND numero_legajo = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ss", $dni, $numero_legajo); /*duda sobre el tipo de balor*/
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function eliminarAlumno($dni, $numero_legajo)
    {
        $q = "DELETE FROM alumno WHERE dni = ? AND numero_legajo = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ss",$dni, $numero_legajo);
        return $query->execute();
    }


    public function modificarAlumno($nombre, $apellido, $dni, $numero_legajo, $email)
    {
        // Consulta SQL con placeholders
        $q = "UPDATE alumno SET nombre = ?, apellido = ?, email = ?, dni = ? WHERE numero_legajo = ?";
        
        // Preparar la consulta
        $query = self::$conexion->prepare($q);
        
        // Todos los parámetros son cadenas de texto (VARCHAR), así que usamos "sssss"
        $query->bind_param("sssss", $nombre, $apellido, $email, $dni, $numero_legajo);
        
        // Ejecutar la consulta
        return $query->execute();
    }

}
