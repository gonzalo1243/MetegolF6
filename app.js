document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const usuario = event.target.usuario.value;
    const password = event.target.password.value;

    // Enviar datos al servidor para verificar las credenciales
    $.ajax({
        url: 'verificar_login.php',
        type: 'POST',
        data: { usuario, password },
        success: function(response) {
            if (response === 'success') {
                Swal.fire({
                    title: '¡Bienvenido a Metegol Futbol 5!',
                    text: 'Has iniciado sesión correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    window.location.href = "http://127.0.0.1:5500/index.html";
                });
            } else {
                Swal.fire({
                    title: '¡Error!',
                    text: 'Hubo un problema con la acción. Inténtalo de nuevo.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            }
        },
        error: function() {
            Swal.fire({
                title: '¡Error!',
                text: 'No se pudo conectar con el servidor. Inténtalo más tarde.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
    });
});