<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "@gmail.com";
$mail->Password = "*********";

$mail->setFrom("SabatiniC&S", "Mensagem enviada do Site");
$mail->addAddress("@gmail.com");
$mail->Subject = "Mensagem do Site";
$mail->msgHTML("<html>De: {$nome}<br/>E-mail: {$email}<br/>Mensagem: {$mensagem}</html>");
$mail->AltBody = "De: {$nome}\nE-mail:{$email}\nMensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: http://sabatinices.com.br");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: index.html");
}
die();