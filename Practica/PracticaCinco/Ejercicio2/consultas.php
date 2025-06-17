<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $webmaster = "webmaster@tusitio.com";  // Cambiá esto por tu email real
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $consulta = nl2br(htmlspecialchars($_POST['consulta']));

    $asunto = "Consulta desde la página de contacto";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    $mensaje_html = "
    <html>
    <head><title>Consulta recibida</title></head>
    <body>
        <h2>Consulta enviada desde la página de contacto</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensaje:</strong><br>$consulta</p>
    </body>
    </html>";

    if (mail($webmaster, $asunto, $mensaje_html, $headers)) {
        echo "Consulta enviada correctamente. ¡Gracias por escribirnos!";
    } else {
        echo "Error al enviar la consulta. Intente nuevamente.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
