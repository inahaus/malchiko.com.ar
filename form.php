<?php

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];

	$recipient1 = "carolina@malchiko.com.ar";
	$recipient2 = "mauricio@malchiko.com.ar";

	$ip = $_SERVER['REMOTE_ADDR'];

	utf8_decode($nombre);
	utf8_decode($email);
	utf8_decode($asunto);
	utf8_decode($mensaje);

	$header  = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=utf-8\r\n";
	$header .= "Reply-to: ".$_POST['email']."\r\n";
	$header .= "From: ".$_POST['nombre']." <".$_POST['email'].">";

	$subject = "Contacto desde la Web: ".$asunto;

	$msg = "<b>Nombre:</b> $nombre\n<br /><b>Asunto:</b> $asunto\n<br /><b>Email:</b> $email\n<br /><b>Mensaje:</b> $mensaje\n<br /><b>IP:</b> $ip\n";

	mail("$recipient1,$recipient2", $subject, $msg, $header);

?>