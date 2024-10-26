<?php
require_once 'conexion.php';  
require_once 'clases/Usuario.php';


class RepoUsuario
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

            if (self::$conexion->connect_error) {
                die('Error de conexión: ' . self::$conexion->connect_error);
            }

            self::$conexion->set_charset('utf8mb4');
        }
    }

    
    public function login($usuario_empleado, $clave_empleado)
    {
        $q = "SELECT id_usuario, clave_empleado FROM usuario WHERE usuario_empleado = ?;";
        $query = self::$conexion->prepare($q);
        
        if ($query === false) {
            throw new Exception('Error en la preparación de la consulta: ' . self::$conexion->error);
        }
        
        $query->bind_param("s", $usuario_empleado); 
        
        if ($query->execute()) {
            $query->bind_result($id_usuario, $clave_encriptada);
            if ($query->fetch()) {
                if (password_verify($clave_empleado, $clave_encriptada)) {
                    return new Usuario($id_usuario, $usuario_empleado, $clave_encriptada);
                }
            }
        } else {
            throw new Exception('Error en la ejecución de la consulta: ' . $query->error);
        }
        
        return false;
    }

    
    public function create($usuario_empleado, $clave_empleado)
    {
        
        $q = "INSERT INTO usuario (usuario_empleado, clave_empleado) VALUES (?, ?);"; 
        $query = self::$conexion->prepare($q);
        
        if ($query === false) {
            throw new Exception('Error en la preparación de la consulta: ' . self::$conexion->error);
        }
        
        
        $clave_encriptada = password_hash($clave_empleado, PASSWORD_DEFAULT);

        
        $query->bind_param("ss", $usuario_empleado, $clave_encriptada);

        
        if ($query->execute()) {
            
            return self::$conexion->insert_id;
        } else {
            
            throw new Exception('Error en la ejecución de la consulta: ' . $query->error);
        }
    }

}
