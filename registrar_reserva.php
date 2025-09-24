<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "usuario", "contraseña", "metegolfutbol5");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$id_reserva = $_POST['id_reserva'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$accion = $_POST['accion'];

if ($accion == "alta") {
    $sql = $conn->prepare("INSERT INTO reservas (id_reserva, fecha, hora) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $id_reserva, $fecha, $hora);
} elseif ($accion == "baja") {
    $sql = $conn->prepare("DELETE FROM reservas WHERE id_reserva = ?");
    $sql->bind_param("s", $id_reserva);
} elseif ($accion == "modificar") {
    $sql = $conn->prepare("UPDATE reservas SET fecha = ?, hora = ? WHERE id_reserva = ?");
    $sql->bind_param("sss", $fecha, $hora, $id_reserva);
} else {
    die("Acción no válida.");
}

// Ejecutar consulta y verificar
if ($sql->execute()) {
    echo "<script>
        alert('Operación realizada con éxito.');
        window.location.href = 'informes.html';
    </script>";
} else {
    echo "<script>
        alert('Error en la operación.');
        window.history.back();
    </script>";
}

// Cerrar conexión
$sql->close();
$conn->close();
?>