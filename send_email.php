<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Dirección de correo a la que se enviará el mensaje
    $to = "bowie202324@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje de contacto";
    
    // Crear el contenido del correo
    $email_content = "Nombre: $name\n";
    $email_content .= "Correo Electrónico: $email\n\n";
    $email_content .= "Mensaje:\n$message\n";

    // Encabezados del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Gracias por contactarnos. Tu mensaje ha sido enviado.";
    } else {
        echo "Lo siento, algo salió mal. Por favor, intenta de nuevo más tarde.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
