<?php
use phpmailer;
require "vendor/autoload.php";
$mail = new PHPMailer();
$mail->IsSMTP();

$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
//usuario
$mail->Username = "Pol Barcia";
//contra
$mail->Password = "root";
$mail->SetFrom('pbarcia18@jaumebalmes.net', 'Test');
//asunto
$mail->Subject = "Upload del XML";
//cuerpo
$mail->MsgHTML('Prueba1');
//adjuntos (nuestro archivo a subir)
$mail->addAttachment("catalogo.xml");
//destinatario
$address = "pol.barcia@gmail.com";
$mail->AddAddress($address, "Test");
//enviar
$resul = $mail->Send();
if (!$resul) {
    echo "Error". $mail->ErrorInfo;
}