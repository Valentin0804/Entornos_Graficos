<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = "destinatario@ejemplo.com";  // Cambiar por tu correo real
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensaje = nl2br(htmlspecialchars($_POST['mensaje']));

    $asunto = "Nuevo mensaje de $nombre";
    
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    $cuerpo = "
    <html>
    <head><title>Mensaje recibido</title></head>
    <body>
        <h2>Nuevo mensaje de contacto</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensaje:</strong><br>$mensaje</p>
    </body>
    </html>";

    if (mail($para, $asunto, $cuerpo, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Acceso inválido.";
}
?>
