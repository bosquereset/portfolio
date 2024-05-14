<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el mensaje del formulario
    $mensaje = $_POST['mensaje'];

    // Dirección de correo a la que se enviará el mensaje
    $destinatario = 'arielcontini@protonmail.com';

    // Asunto del mensaje
    $asunto = 'Nuevo mensaje desde el formulario de contacto';

    // Construir el cuerpo del mensaje
    $cuerpo = "Mensaje:\n\n$mensaje";

    // Enviar el mensaje por correo electrónico
    if (mail($destinatario, $asunto, $cuerpo)) {
        echo "El mensaje se ha enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Acceso denegado.";
}
?>
