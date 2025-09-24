<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "usuario", "contraseña", "metegolfutbol5");

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener las personas
$sql = "SELECT id_persona, nombre, apellido FROM personas";
$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
    echo "<h2>Personas Registradas</h2>";
    echo "<table class='table'>";
    echo "<thead><tr><th>ID Persona</th><th>Nombre</th><th>Apellido</th></tr></thead>";
    echo "<tbody>";
    
    // Recorrer todas las filas de resultados
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";  // Aquí se abre una fila de la tabla
        echo "<td>" . $row["id_persona"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "</tr>";  // Aquí se cierra la fila de la tabla
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No se encontraron personas registradas.</p>";
}

// Cerrar la conexión
$conn->close();
?>