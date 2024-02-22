let message =
    "<div>" +
    "<p><strong>¡Hola!</strong> 👋 Bienvenido a tu asistente de predicciones ⚽ utilizando 🤖 .</p>" +
    "<p> <strong>1.</strong> Para comenzar a generar tus predicciones completa la información personal y selecciona la configuración de tus pronosticos en la parte inferior</p>" +
    "<p> <strong>2. Realiza el pago de tus pronosticos dando clic en el boton <strong>Pagar</strong> </p>" +
    "<p> <strong>3. Si el pago es Exitoso podras visualizar tus predicciones en pantalla ademas de esto se te enviaran al correo registrado.</strong> </p>" +
    "<p> <strong>NOTA: Si presentas fallas comunicate con la linea de soporte al cliente xxxxxx.</strong> </p>"  
    "</div>";


let words = message.split(" "); // Divide el mensaje en palabras
let index = 0;

function showMessageGradually() {
    if (index < words.length) {
        $("#typing-indicator").append(words[index] + " "); // Agrega la próxima palabra con un espacio
        index++;
        // Ajusta el scroll hacia abajo
        $("#chat-messages").scrollTop($("#typing-indicator").height());
        setTimeout(showMessageGradually, 100); // Llama a la función de nuevo después de un tiempo
    }
}

export { showMessageGradually };
