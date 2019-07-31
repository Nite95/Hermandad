<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];

// Creo 3 variables que me toman lo que se envía por POST de cada valor
// del formulario

$destino="jeruv31@gmail.com";

$asunto="Consulta enviada desde localhost";

$mensaje="Tu Nombre es: ".$nombre_usuario."\r\n";
$mensaje="tu Email es: ".$email_usuario."\r\n";
$mensaje="Mensaje: ".$consulta_usuario."\r\n";

$remitente="From: wersonuribevega@gmail.com";

mail($destino,$asunto,$mensaje,$remitente);

header("location:index.php?i=ok");

//Si el formulario se envió correctamente, poneme en la url despues del index.php
// un signo de pregunta, una letra i, y un igual OK
 ?>
