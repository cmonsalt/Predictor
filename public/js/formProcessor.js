export function processForm() {
    // Obtener los datos del formulario
    var formData = {
        nombre: $("#name-input").val(),
        apellido: $("#last-name-input").val(),
        correo: $("#email-input").val(),
        liga: $("#selectLeague").val(),
        equipoLocal: $("#selectTeamLocal").val(),
        equipoVisitante: $("#selectTeamVisitor").val(),
        nivelApuesta: $("#selectLevel").val(),
        _token: $('meta[name="csrf-token"]').attr('content') // Agregar el token CSRF
    };


    // Enviar los datos del formulario mediante Ajax
    $.ajax({
        type: "POST",
        url: "/procesar-formulario",
        data: formData,
        success: function (response) {
            // Manejar la respuesta del servidor si es necesario
            alert("¡Formulario enviado correctamente!");
        },
        error: function (xhr, status, error) {
            // Manejar errores de la llamada Ajax
            console.error("Error al enviar el formulario:", error);
            console.log("Estado de la solicitud:", status);
            console.log("Respuesta del servidor:", xhr.responseText);
        },
    });
}
