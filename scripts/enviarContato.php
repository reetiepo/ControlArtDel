<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("../plugins/PHPMailer/src/PHPMailer.php"); 
require("../plugins/PHPMailer/src/SMTP.php");
require("../plugins/PHPMailer/src/Exception.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"]; 

$assunto = "Contato enviado através do site - ".$assunto;   
	
$mensagemHTML = "<html><head></head><body><div id=\"geral\"><table width=\"80%\">"; 
$mensagemHTML .= "<tr><td colspan=2><h3>".$assunto."</h3></td></tr>";
$mensagemHTML .= "<tr><td width=\"10%\">Nome:</td><td width=\"90%\">".$nome."</td></tr>";
$mensagemHTML .= "<tr><td width=\"10%\">E-mail:</td><td width=\"90%\">".$email."</td></tr>";
$mensagemHTML .= "<tr><td width=\"10%\">Mensagem:</td><td width=\"90%\">".$mensagem."</td></tr>";
$mensagemHTML .= "<tr><td width=\"10%\">";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Username = "reetiepo@gmail.com"; 
$mail->Password = "reezita3714"; 
$mail->setFrom("controlartdel@gmail.com", "Site CAD", "0");
$mail->AddAddress("reetiepo@gmail.com");
$mail->IsHTML(true); 
$mail->CharSet = 'utf-8'; 
$mail->Subject = $assunto;
$mail->Body = $mensagemHTML;   

if ($mail->Send()){		
	echo "<script>alert('Seu email foi enviado com sucesso. Embreve retornaremos o seu contato!');window.location.href = '../contato.php';</script>";
 } else {  
	echo "<script>alert('Houve um erro ao tentar enviar o seu email. Por favor, tente novamente mais tarde.');window.location.href = '../contato.php';</script>";
	//$mail->ErrorInfo;
 }
 ;
?>