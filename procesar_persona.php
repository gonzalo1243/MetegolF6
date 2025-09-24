<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$accion = $_POST['accion'];

// Aquí puedes guardar estos datos en una base de datos o procesarlos de alguna manera
// Para el ejemplo, solo vamos a redirigir a la página de informe con los datos como parámetros en la URL

header("Location: informe_persona.php?nombre=" . urlencode($nombre) . "&apellido=" . urlencode($apellido) . "&accion=" . urlencode($accion));
exit();
?>