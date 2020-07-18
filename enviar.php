<?php

$destinatario = 'pablo_mtv08@hotmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$asunto = 'Mensaje de mi sitio web';
$header = 'De: ' . $email . " \r\n";
$mensajeCompleto ="\n". $mensaje . "\n\nDe: " . $nombre. "\nemail: " . $email;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo"<script class=\"alert alert-success\" >alert('Correo enviado exitosamente')</script>";
echo"<div class=\"alert alert-success\">Correo enviado exitosamente</div>";
echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>" ;



?>



