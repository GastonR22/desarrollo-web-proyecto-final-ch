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

$para = "juanpiledda@gmail.com";
$asunto ="Email enviado desde tu sitio web";

mail($para,$asunto,$contenido);
header("Location: https://domescalcomanias.000webhostapp.com/html/contacto.html");
exit;
?>