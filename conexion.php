<?php
$servidor = "localhost"; // Servidor de la base de datos (generalmente localhost)
$usuario = "root"; // Usuario de la base de datos (cambia si usas otro)
$clave = ""; // Contraseña de la base de datos (déjala vacía si no tiene)
$base_datos = "metegolfutbol5"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Establecer el juego de caracteres para evitar problemas con acentos
$conn->set_charset("utf8");

// Opcional: Mostrar mensaje si la conexión es exitosa
// echo "Conexión exitosa"; 
?>