<?php
$nombre     = $_POST['nombre'];
$apellido   = $_POST['apellido'];
$usuario    = $_POST['usuario'];
$clave      = $_POST['clave'];
$sexo       = $_POST['sexo'];
$correo     = $_POST['correo'];
$asunto     = $_POST['asunto'];
$fecha_viaje = $_POST['fecha_viaje'];
$mensaje    = $_POST['mensaje'];

$header .= "Content-Type: text/plain";

$mensaje = $nombre;
$mensaje .= $apellido;
$mensaje .= $usuario;
$mensaje .= $clave;
$mensaje .= $sexo;
$mensaje .= $correo;
$mensaje .= $asunto;
$mensaje .= $fecha_viaje;
$mensaje .= $mensaje;

$para = 'quesoconsopa1@gmail.com'
$asunto = 'Mensaje owo'

mail($para, $asunto, utf8_decode($mensaje), $header)

header("Location:section/gracias.html");

?>