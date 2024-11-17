<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Validación básica (puedes mejorarla según sea necesario)
    if (empty($nombre) || empty($email) || empty($asunto) || empty($mensaje)) {
        echo "Todos los campos son requeridos.";
    } else {
        // Aquí puedes procesar los datos, por ejemplo, enviarlos por correo
        $to = "cecireicito_@hotmail.com";  // Cambia esto por tu correo
        $subject = "Nuevo mensaje de $nombre - $asunto";
        $message = "De: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
        $headers = "From: $email";

        // Enviar el correo
        if (mail($to, $subject, $message, $headers)) {
            echo "Gracias por contactarnos. Nos pondremos en contacto contigo pronto.";
        } else {
            echo "Hubo un error al enviar el mensaje. Intenta nuevamente más tarde.";
        }
    }
}
?>
