<?php
$to = "nazarenasol@yahoo.com.ar";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];



$message = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h1>Contacto information from the website</h1>
<p>Nombre del usuario: $nombre </p> 
<p>Email: $email </p> 
<p>Mensaje: $mensaje </p>


</body>
</html>";
 echo 'Gracias por tu mensaje';
mail($to, $subject, $message, $headers);
?>