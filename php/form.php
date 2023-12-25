<?php


$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];


//como va a llegar el cuerpo del mensaje
$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su email es" . $mail . ",\r\n";
$mensaje .= "Su numero de telefono es" . $telefono . ",\r\n";
$mensaje .= "Mensaje" . $_POST['mensaje'] . ",\r\n";
$mensaje .= "Enviado el" . date('d/m/Y', time());

$para = 'pablochiroli@hotmail.com';
$asunto = 'Este mail fue enviado de la Web de La Colmena'

//funcion mail
//a quien le mando el email
mail($para, $asunto, utf8_decode($mensaje), $header)
header('<location:../index.html')