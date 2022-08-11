<?php

$nombre = $_POST["nombre"]
$email = $_POST ["email"]
$numero = $_POST ["numero"]
$mensaje = $_POST ["asunto"]


$mensaje = "Este mensaje fue enviado por:" . $nombre . " /r/n";
$mensaje = "Su email es:" . $email . " /r/n";
$mensaje = "Su numero telefonico es:" . $numero . " /r/n";
$mensaje = "Su mensaje es:" . $_POST["asunto"] . " /r/n";
$mensaje = "Enviado el:" . date('d/m/Y' . time());

$para = "ffnauto@gmail.com";
$asunto = "Mensaje de pruebas";

mail($para, $asunto, utf8_decode($mensaje), $header);


header("Location:index.html");
?>