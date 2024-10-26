
<?php

require_once 'conexion.php';  
require_once 'clases/Examen.php';

class RepoExamen
{
    public static $conexion = null;

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

    public function crearExamen($materia, $nota, $docente, $fecha, $alumno, $alumno_numero_legajo)
    {
        $q = "INSERT INTO examen (materia, nota, docente, fecha, alumno_id, alumno_numero_legajo) VALUES (?, ?, ?, ?, ?, ?)";
        $query = self::$conexion->prepare($q);
        $query->bind_param("sissss", $materia, $nota, $docente, $fecha, $alumno, $alumno_numero_legajo);

        return $query->execute();
    }

    public function obtenerExamen($materia, $fecha, $alumno_numero_legajo)
    {
        $q = "SELECT * FROM examen WHERE materia = ? AND fecha = ? AND alumno_numero_legajo = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("sss", $materia, $fecha, $alumno_numero_legajo);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function eliminarExamen($materia, $fecha, $docente, $alumno_numero_legajo)
    {
        $q = "DELETE FROM examen WHERE materia = ? AND fecha = ? AND docente = ? AND alumno_numero_legajo = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("ssss", $materia, $fecha, $docente, $alumno_numero_legajo);
        return $query->execute();
    }
    public function modificarExamen($materia, $nota, $fecha, $alumno_numero_legajo)
    {
        $q = "UPDATE examen SET nota = ? WHERE fecha = ? AND alumno_numero_legajo = ? AND materia = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("siss", $materia, $nota, $fecha, $alumno_numero_legajo);
        return $query->execute();
    } //REVISAR PORQUE NO MODIFICA
}