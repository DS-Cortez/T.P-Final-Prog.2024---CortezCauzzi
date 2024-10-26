
<!--/*require_once 'conexion.php';

$sql = "SELECT * FROM alumno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos de cada fila
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>DNI</th><th>Numero de Legajo</th><th>Email</th></tr>"; // Encabezado de la tabla, cambia según tus columnas

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
require_once 'conexion.php';

$nombre = isset($_POST['nombre_alumno']) ? $_POST['nombre_alumno'] : '';
$apellido = isset($_POST['apellido_alumno']) ? $_POST['apellido_alumno'] : '';
$numero_legajo = isset($_POST['numero_legajo']) ? $_POST['numero_legajo'] : '';

$q = "SELECT * FROM alumno WHERE nombre LIKE ? AND apellido LIKE ? AND numero_legajo LIKE ?";
$stmt = $conn->prepare($q);
$nombre = "%$nombre%";
$apellido = "%$apellido%";
$numero_legajo = "%$numero_legajo%";
$stmt->bind_param("sss", $nombre, $apellido, $numero_legajo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_alumno"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["dni"] . "</td>";
        echo "<td>" . $row["numero_legajo"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}*/ -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de alumnos</title>
    <link rel="stylesheet" type="text/css" href="CSS/listado.css"> 
</head>
<body>
<?php
require_once 'conexion.php'; 

if (isset($_POST['nombre_alumno'])) {
    $nombreAlumno = $_POST['nombre_alumno'];

    

    $query = "SELECT a.nombre, a.apellido, e.materia, e.nota, e.docente, e.fecha, AVG(e.nota) AS promedio
              FROM alumno a
              JOIN examen e ON a.numero_legajo = e.alumno_numero_legajo
              WHERE a.nombre LIKE ?
              GROUP BY a.numero_legajo, e.materia, e.nota, e.docente, e.fecha";
    
    $stmt = $conexion->prepare($query); 
    $nombreBusqueda = "%$nombreAlumno%";

    $stmt->bind_param("s", $nombreBusqueda);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Resultados de la búsqueda para '$nombreAlumno':</h2>";
        

        $promedioTotal = 0;
        $contadorMaterias = 0;

        while ($fila = $result->fetch_assoc()) {
            echo "<p>Nombre: " . $fila['nombre'] . " " . $fila['apellido'] . 
                 " | Materia: " . $fila['materia'] . 
                 " | Nota: " . $fila['nota'] . 
                 " | Docente: " . $fila['docente'] . 
                 " | Fecha: " . $fila['fecha'] . "</p>";


            $promedioTotal += $fila['nota'];
            $contadorMaterias++;
        }

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