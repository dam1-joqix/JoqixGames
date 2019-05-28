<?php

if(isset( $_POST['name']))
    $name = strip_tags($_POST['name']);

if(isset( $_POST['email']))
    $email = strip_tags($_POST['email']);

if(isset( $_POST['message']))
    $message = strip_tags($_POST['message']);

if(isset( $_POST['subject']))
    $subject = strip_tags($_POST['subject']);

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

//Headers del correo electrónico.
$headers =
	'From: ' . $correoFrom . "\r\n". 
	'Reply-To: ' . $correoDestino. "\r\n" . 
	'X-Mailer: PHP/' . phpversion() .
	'MIME-Version: 1.0\r\n'.
	'Content-type: text/html; charset=UTF-8\r\n';

//Correo de destino; donde se enviará el correo.
$correoDestino = "jalonsop12@informatica.iesvalledeljerteplasencia.es";

$asunto = "JOQIXGAMES - $subject ";
$cuerpo= "Enviado por: $name a las $fechaFormateada. ";
$cuerpo.=" Mensaje: $message ";
$cuerpo=" Email: $email ";

$textoEmisor = "MIME-VERSION: 1.0\r\n";
$textoEmisor .= "Content-type: text/html; charset=UTF–8\r\n";
$textoEmisor .= "From: Formulario de joqixGames -joqixgames.byethost7.com";

try{
//mail( $correoDestino, $asunto, $cuerpo);
imap_mail('joqixfkj@gmail.com','titulo',$cuerpo);
echo "Enviado en teoria ";
}catch(Exception $e){
    echo $e->getMessage();
    var_dump($e);
}
?>