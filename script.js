// Función para manejar el cambio de contenido dinámico
function mostrarContenido(tipo) {
    const contenido = document.getElementById("contenido");

    // Cargar contenido según el tipo
    switch(tipo) {
        case 'inicio':
            contenido.innerHTML = "<p>Bienvenido a Metegol Fútbol 5. Selecciona una opción para ver más información.</p>";
            break;
        case 'persona':
            cargarDatos('persona');
            break;
        case 'reserva':
            cargarDatos('reserva');
            break;
        case 'informe':
            cargarDatos('informe');
            break;
    }
}

// Función para cargar los datos mediante AJAX
function cargarDatos(tipo) {
    const contenido = document.getElementById("contenido");

    // Crear una solicitud AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("GET", tipo + ".php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            contenido.innerHTML = xhr.responseText;
        } else {
            contenido.innerHTML = "<p>Hubo un error al cargar los datos.</p>";
        }
    };
    xhr.send();
}