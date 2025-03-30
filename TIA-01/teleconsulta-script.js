/**
 *  Colocar aquí el equipo y sus integrantes
 */


/**
 *  Manejo de previsualización de imágenes
 */ 
document.getElementById('fotoPaciente').addEventListener('change', function(event) {
    mostrarImagen(event, 'previewPaciente');
});

/**
 * Evento de previsualización de foto del Médico
 */
document.getElementById('fotoDoctor').addEventListener('change', function(event) {
    mostrarImagen(event, 'previewDoctor');
});


/**
 * Carga inicial del Formulario
 */
document.addEventListener("DOMContentLoaded", function () {
    // Ruta de la imagen y el audio dentro de la misma carpeta
    const imagenPaciente   = "teleconsulta-foto-paciente-1.jpg";  // Nombre de la imagen en la misma carpeta
    const imagenDoctor     = "teleconsulta-foto-doctora-1.jpg";    // Nombre de la imagen en la misma carpeta
    const audioDiagnostico = "teleconsulta-diagnostico-1.mp3";    // Nombre del audio en la misma carpeta

    // Cargar imagen del paciente automáticamente
    const imgPaciente = document.getElementById("previewPaciente");
    imgPaciente.src = imagenPaciente;
    imgPaciente.alt = "Foto del Paciente";

    // Cargar y reproducir el audio automáticamente
    const audioPlayer = document.getElementById("audioPlayback");
    audioPlayer.src = audioDiagnostico;
    audioPlayer.controls = true; // Muestra los controles de reproducción
});



/**
 * 
 *  Función para mostrar imagen de paciente o doctor
 */
function mostrarImagen(event, previewId) {
    const archivo = event.target.files[0];
    if (archivo) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(previewId).src = e.target.result;
        };
        reader.readAsDataURL(archivo);
    }
}

const boton = document.getElementById("miBoton");

// Variable para controlar el estado
let datos_ok = true; // Cambia el estado dinamicamente
/** 

/** Acción al hacer clic en el botón */
boton.addEventListener("click", function() {
    if (datos_ok) {
        alert("Formulario enviado con éxito.");
    } else {
        alert("No se pudo enviar el formulario.");
    }
});

$(document).ready(function() {
    $(".menu-movil").hide();

    // Mostrar/ocultar el menú
    $(".logo-movil .logo-hambur").click(function() {
        $(".menu-movil").slideToggle();
        $(".logo-movil .logo-hambur").toggle();
        $(".logo-movil .logo-error").toggle();
    });

    $(".logo-movil .logo-error").click(function() {
        $(".menu-movil").slideToggle();
        $(".logo-movil .logo-hambur").toggle();
        $(".logo-movil .logo-error").toggle();
    });

    // Cerrar el menú cuando se haga clic en un enlace
    $(".menu-movil a").click(function() {
        $(".menu-movil").slideUp(); // Cierra el menú
        $(".logo-movil .logo-hambur").show(); // Muestra el ícono de hamburguesa
        $(".logo-movil .logo-error").hide(); // Oculta el ícono de error
    });
});
