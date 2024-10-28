<?php
require_once 'conexion.php';
$q = "SELECT * FROM examen";
$result = $conexion->query($q);

if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Materia</th><th>Nota</th><th>Docente</th><th>Fecha</th><th>Nombre del Alumno</th><th>Nro. de Legajo</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["materia"] . "</td>";
        echo "<td>" . $row["nota"] . "</td>";
        echo "<td>" . $row["docente"] . "</td>";
        echo "<td>" . $row["fecha"] . "</td>";
        echo "<td>" . $row["alumno_id"] . "</td>";
        echo "<td>" . $row["alumno_numero_legajo"] . "</td>";
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
