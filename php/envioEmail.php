<?php 
$nombre = $_POST['name'];
$provincia = $_POST['provincia'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];


$contenido = "Enviado por: " . $nombre . " " . $provincia . ", \r\n";
$contenido .= "E-mail: " . $email . ", \r\n";
$contenido .= "Teléfono: " . $telefono . ", \r\n";
$contenido .= "Mensaje: " . $mensaje . ", \r\n";

$para = "email@mail.com";
$asunto ="Email enviado desde tu sitio web";

$mail= mail($para,$asunto,$contenido);
mail($para,$asunto,$contenido);
?>