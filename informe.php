<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "usuario", "contraseña", "metegolfutbol5");

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener las reservas, usuarios y personas
$sql = "SELECT reservas.id_reserva, usuarios.nombre AS usuario, personas.nombre AS persona 
        FROM reservas 
        JOIN usuarios ON reservas.id_usuario = usuarios.id_usuario 
        JOIN personas ON reservas.id_persona = personas.id_persona";
$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
    echo "<h2>Informes de Reservas</h2>";
    echo "<table class='table table-striped'>";
    echo "<thead><tr><th>Reserva</th><th>Usuario</th><th>Persona</th></tr></thead>";
    echo "<tbody>";

    // Recorrer los resultados y mostrar los datos
    while ($row = $result->fetch_assoc()) {
        echo "<tr>"; // Abrir la fila de la tabla
        echo "<td>" . $row["id_reserva"] . "</td>";
        echo "<td>" . $row["usuario"] . "</td>";
        echo "<td>" . $row["persona"] . "</td>";
        echo "</tr>"; // Cerrar la fila de la tabla
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No se encontraron informes.</p>";
}

// Cerrar la conexión
$conn->close();
?>