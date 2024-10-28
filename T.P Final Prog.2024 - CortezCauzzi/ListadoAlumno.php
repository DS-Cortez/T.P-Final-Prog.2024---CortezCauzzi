
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de alumnos</title>
    <link rel="stylesheet" type="text/css" href="CSS/eliminar_examen.css"> 
</head>
<body>
<?php
require_once 'conexion.php'; 

if (isset($_POST['nombre_alumno'])) {
    $nombreAlumno = $_POST['nombre_alumno'];

    $q = "SELECT a.nombre, a.apellido, e.materia, e.nota, e.docente, e.fecha, AVG(e.nota) AS promedio
              FROM alumno a
              JOIN examen e ON a.numero_legajo = e.alumno_numero_legajo
              WHERE a.nombre LIKE ?
              GROUP BY a.numero_legajo, e.materia, e.nota, e.docente, e.fecha";
    
    $stmt = $conexion->prepare($q); 
    $nombreBusqueda = "%$nombreAlumno%";

    $stmt->bind_param("s", $nombreBusqueda);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Resultados de la búsqueda para '$nombreAlumno':</h2>";

        // Generamos la tabla
        echo "<table>";
        echo "<tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Materia</th>
                <th>Nota</th>
                <th>Docente</th>
                <th>Fecha</th>
              </tr>";

        $promedioTotal = 0;
        $contadorMaterias = 0;

        while ($fila = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['apellido'] . "</td>
                    <td>" . $fila['materia'] . "</td>
                    <td>" . $fila['nota'] . "</td>
                    <td>" . $fila['docente'] . "</td>
                    <td>" . $fila['fecha'] . "</td>
                  </tr>";

            $promedioTotal += $fila['nota'];
            $contadorMaterias++;
        }

        echo "</table>";

        if ($contadorMaterias > 0) {
            $promedioAlumno = $promedioTotal / $contadorMaterias;
            echo "<h3>Promedio de notas: " . number_format($promedioAlumno, 2) . "</h3>";
        } else {
            echo "<h3>El alumno no tiene materias rendidas.</h3>";
        }

    } else {
        echo "<h2>No se encontraron resultados para '$nombreAlumno'.</h2>";
    }
    
    $stmt->close();
    $conexion->close();
} else {
    echo "<h2>No se ha ingresado ningún nombre de alumno.</h2>";
}
?>

<a href="index.php" class="btn btn-primary" style="position: absolute; top: 10px; left: 10px;">Volver al inicio</a>

