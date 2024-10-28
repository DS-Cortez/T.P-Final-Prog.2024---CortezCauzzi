<?php
require_once 'conexion.php';
$q = "SELECT * FROM alumno";
$result = $conexion->query($q);

if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>DNI</th><th>Nro. de Legajo</th><th>Email</th></tr>"; // Encabezado de la tabla, cambia según tus columnas

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_alumno"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["dni"] . "</td>";
        echo "<td>" . $row["numero_legajo"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/eliminar_examen.css">
</head>

<a href="index.php" class="btn btn-primary" style="position: absolute; top: 10px; left: 10px;">Volver al inicio</a>
