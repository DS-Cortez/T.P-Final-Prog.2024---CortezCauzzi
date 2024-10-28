<?php
require_once 'conexion.php';
$q = "SELECT * FROM materia";
$result = $conexion->query($q);

if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Descripcion</th></tr>"; // Encabezado de la tabla, cambia según tus columnas

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["idMateria"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Descripcion"] . "</td>";
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
