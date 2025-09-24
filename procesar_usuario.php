<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$accion = $_POST['accion'];

// Aquí se pueden realizar operaciones adicionales como guardar en una base de datos

// Redirigir a la página de informes con los datos como parámetros en la URL
header("Location: informe_usuario.php?nombre=" . urlencode($nombre) . "&accion=" . urlencode($accion));
exit();
?>