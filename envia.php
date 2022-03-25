<?php 
error_reporting(0); 

$nombre = $_POST['nombre']; 
$correo_electronico= $_POST['email']; 
$telefono=$_POST['telefono']; 
$opcion=$_POST['opcion']; 
$quequiere= $_POST['quequiere']; 

$header = 'From: ' . $correo_electronico . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Mensaje enviado por : " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es : " . $correo_electronico . " \r\n"; 
$mensaje .= "Telefono : " . $telefono . " \r\n"; 
$mensaje .= "Opcion : " . $opcion . " \r\n";
$mensaje .= "Mensaje : ".$quequiere . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'correodestino@dominio.com'; 

$asunto = 'Contacto desde página web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 
?> 
<script>
	function r() { location.href="http://www.serviciosbarrera.cl/mensajeok.html" } 
	setTimeout ("r()", 500);
</script>