<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.redesoft.com.co';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '_mainaccount@redesoft.com.co';                     //SMTP username
    $mail->Password   = 'cvT1P6@z7@tKX9_@';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('redeso@noemi.colombiahosting.com.co', 'redeso');
    $mail->addAddress('marzeku@gmail.com');     //Add a recipient

    //Content
    
    $headers = $_POST["from"]; 
    $asunto = $_POST["asunto"];
    $envio = $_POST["envio"];
    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = "-> Mensaje enviado por: ". $headers. "<br><br>". $envio;

    $mail->send();
    echo 'El mensaje se envió correctamente';
    header("location:../index1.php");
    
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
}

?>