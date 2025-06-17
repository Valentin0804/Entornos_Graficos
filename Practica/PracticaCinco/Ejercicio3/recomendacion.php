<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $tu_email = filter_var($_POST['tu_email'], FILTER_VALIDATE_EMAIL);
    $email_amigo = filter_var($_POST['email_amigo'], FILTER_VALIDATE_EMAIL);

    $asunto = "$nombre te recomienda visitar este sitio web";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <$tu_email>\r\n";

    $mensaje_html = "
    <html>
    <head><title>Te recomiendo este sitio</title></head>
    <body>
        <h2>¡Hola!</h2>
        <p>Tu amigo <strong>$nombre</strong> (<em>$tu_email</em>) te recomienda visitar este sitio web.</p>
        <p>¡Entrá y descubrí más en <a href='http://localhost/tu-sitio/'>nuestro sitio web</a>!</p>
    </body>
    </html>";

    if (mail($email_amigo, $asunto, $mensaje_html, $headers)) {
        echo "Recomendación enviada exitosamente a $email_amigo.";
    } else {
        echo "Error al enviar la recomendación.";
    }
} else {
    echo "Acceso inválido.";
}
?>
