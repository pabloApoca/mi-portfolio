<?php

$destinatario = 'pablo_mtv08@hotmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$asunto = 'Mensaje de mi sitio web';
$header = 'De: ' . $email . " \r\n";
$mensajeCompleto ="\n". $mensaje . "\n\nDe: " . $nombre. "\nemail: " . $email;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo"<script>alert('Correo enviado exitosamente')</script>";
echo"<script>setTimeout(\"location.href='https://pablolopez9408.000webhostapp.com'\",1000)</script>" ;

?>