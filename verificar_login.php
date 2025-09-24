<?php
// verificar_login.php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Aquí deberías conectarte a tu base de datos para verificar las credenciales
// Supón que tienes una función llamada verificar_credenciales()

// Si la autenticación es correcta
if (verificar_credenciales($usuario, $password)) {
    echo 'success';
} else {
    echo 'error';
}

function verificar_credenciales($usuario, $password) {
    // Lógica de conexión a la base de datos y verificación de usuario y contraseña
    // Esto es solo un ejemplo, debes adaptarlo a tu sistema
    return ($usuario === 'usuario_de_prueba' && $password === 'contraseña_de_prueba');
}
?>