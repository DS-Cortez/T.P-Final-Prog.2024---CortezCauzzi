<?php

$servidor = "localhost";
$usuario= "root";
$clave = "96Filogolpe6996";
$base_de_datos = "alumno1";

function credenciales() {
    return [
        'servidor' => 'localhost',
        'usuario' => 'root',
        'clave' => '96Filogolpe6996',
        'base_de_datos' => 'alumno1'
    ];
}


$conexion = mysqli_connect($servidor, $usuario, $clave, $base_de_datos);

if (!$conexion) {
    die('No se pudo conectar: ' . mysqli_connect_error());
}

