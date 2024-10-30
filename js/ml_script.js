$(document).ready(function() {
    // Mostrar mensaje en la consola al cargar el sitio
    console.log("Blog de Rock cargado.");

    // Enviar el comentario al presionar el botón
    $("#comentarios-form").submit(function(e) {
        e.preventDefault();
        guardarComentario();
    });
});

// Función para guardar comentario y mostrarlo
function guardarComentario() {
    let comentario = $("#comentario").val().trim();

    if (comentario) {
        $("#comentarios").prepend(`<div class="comentario"><p>${comentario}</p></div>`);
        $("#comentario").val('');
    } else {
        alert("Por favor, escribe un comentario antes de enviarlo.");
    }
}

function guardarComentario() {
    let comentario = $("#comentario").val().trim();

    if (comentario) {
        $.ajax({
            url: 'ml_guardar_comentario.php',
            type: 'POST',
            data: { comentario: comentario },
            success: function(response) {
                $("#comentarios").prepend(`<div class="comentario"><p>${comentario}</p></div>`);
                $("#comentario").val('');
            },
            error: function() {
                alert("Hubo un error al guardar tu comentario.");
            }
        });
    } else {
        alert("Por favor, escribe un comentario antes de enviarlo.");
    }
}


