<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "usuario", "contraseña", "metegolfutbol5");

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener las reservas
$sql = "SELECT id_reserva, fecha, hora FROM reservas";
$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
    echo "<h2>Reservas Registradas</h2>";
    echo "<table class='table'>";
    echo "<thead><tr><th>ID Reserva</th><th>Fecha</th><th>Hora</th></tr></thead>";
    echo "<tbody>";
    
    // Recorrer todas las filas de resultados
    while ($row = $result->fetch_assoc()) {
        echo "<tr>"; // Abrir una nueva fila para cada reserva
        echo "<td>" . $row["id_reserva"] . "</td>";
        echo "<td>" . $row["fecha"] . "</td>";
        echo "<td>" . $row["hora"] . "</td>";
        echo "</tr>"; // Cerrar la fila
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No se encontraron reservas.</p>";
}

// Cerrar la conexión
$conn->close();
?>