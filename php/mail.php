<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subjet']);
    $message = htmlspecialchars($_POST['message']);

    // Dirección de correo a la que se enviará
    $to = "domingomr5@gmail.com";

    // Cuerpo del correo
    $email_message = "Has recibido un nuevo mensaje de tu formulario de contacto:\n\n";
    $email_message .= "Nombre: $name\n";
    $email_message .= "Correo: $email\n";
    $email_message .= "Asunto: $subject\n\n";
    $email_message .= "Mensaje:\n$message\n";

    // Cabeceras del correo
    $headers = "From: noreply@tudominio.com\r\n"; // Cambia 'tudominio.com' por el tuyo si es aplicable
    $headers .= "Reply-To: $email\r\n";

    // Intentar enviar el correo
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo. Inténtalo de nuevo más tarde.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
