<?php

require "../PHPMailer/PHPMailerAutoload.php";

function send_mail(){

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$celular = $_POST["celular"];
	$mensagem = $_POST["mensagem"];  
	$tipocontato = $_POST['assunto'];
	$pagina = $_POST['pagina'];
	$tipo = $_POST['assunto'];
	if($_POST['empresa']){ // Se for assistência técnica
		$_POST['assunto'] = 'Assistência';
		$empresa = $_POST['empresa'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
	}
	elseif($_POST['assunto'] == ''){ // Se for o form da home (index.php)
		$_POST['assunto'] = 'Representante';
	}

	$comcopiaoculta    = $_POST["email"].",anuncios.rayflex@gmail.com,adriana@multifoco.com.br";

	if($_POST['assunto'] == 'Suprimentos') {
	$emaildestinatario = "compras@rayflex.com.br";
	//$emaildestinatario = "sistema_formulario@rayflex.com.br"; 
	} 
	elseif($_POST['assunto'] == 'Recursos Humanos') {
	$emaildestinatario = "rh@rayflex.com.br";
	//$emaildestinatario = "sistema_formulario@rayflex.com.br"; 
	}
	elseif($_POST['assunto'] == 'Marketing') {
	$emaildestinatario = "marketing@rayflex.com.br";
	//$emaildestinatario = "sistema_formulario@rayflex.com.br";  
	}
	elseif($_POST['assunto'] == 'Vendas') {
	$emaildestinatario = "raquel@rayflex.com.br";
	//$emaildestinatario = "sistema_formulario@rayflex.com.br"; 
	}
	elseif($_POST['assunto'] == 'Assistência') {
	$emaildestinatario = "posvendas1@rayflex.com.br";
	//$emaildestinatario = "sistema_formulario@rayflex.com.br"; 
	}elseif($_POST['assunto'] == 'Representante') {
	$emaildestinatario = "comercial@rayflex.com.br";
	//$emaildestinatario = "sistema_formulario@rayflex.com.br"; 
	}
	elseif($_POST['assunto'] == 'Outro') {
	$emaildestinatario = "rayflex@rayflex.com.br";  
	//$emaildestinatario = "sistema_formulario@rayflex.com.br"; 
	}

	$assunto = "Contato enviado através do site - ".$_POST['assunto'];   
			

	if($_POST['assunto'] == 'Assistência'){
		$mensagemHTML = "<html><head></head><body><div id=\"geral\"><table width=\"80%\">"; 
		$mensagemHTML .= "<tr><td colspan=2><h3>Contato enviado através do site</h3></td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Nome:</td><td width=\"90%\">".$nome."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">E-mail:</td><td width=\"90%\">".$email."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Empresa:</td><td width=\"90%\">".$empresa."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Endereco:</td><td width=\"90%\">".$endereco."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Cidade:</td><td width=\"90%\">".$cidade."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Estado:</td><td width=\"90%\">".$estado."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Cep:</td><td width=\"90%\">".$cep."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">";

	}
	else{
		$mensagemHTML = "<html><head></head><body><div id=\"geral\"><table width=\"80%\">"; 
		$mensagemHTML .= "<tr><td colspan=2><h3>Contato enviado através do site</h3></td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Nome:</td><td width=\"90%\">".$nome."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">E-mail:</td><td width=\"90%\">".$email."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Telefone:</td><td width=\"90%\">".$telefone."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Celular:</td><td width=\"90%\">".$celular."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">Mensagem:</td><td width=\"90%\">".$mensagem."</td></tr>";
		$mensagemHTML .= "<tr><td width=\"10%\">";
	}

	$mail2 = new PHPMailer;
	$mail2->Host = 'smtp.rayflex.com.br';
	$mail2->Port = 587;
	$mail2->SMTPAuth = true;
	$mail2->SMTPSecure = "tls";
	$mail2->Username = "email"; 
	$mail2->Password = "senha"; 
	$mail2->setFrom("rayflex@rayflex.com.br", "Rayflex");
    $mail2->AddAddress($emaildestinatario);
	$mail2->IsHTML(true); 
	$mail2->CharSet = 'utf-8'; 
	// $mail2->AddBCC($comcopiaoculta);
	$mail2->Subject = $assunto;
	$mail2->Body = $mensagemHTML;   

	if ($mail2->Send()){
		
		// $pdo = new PDO('mysql:host=nwt-rayflex.mysql.uhserver.com;dbname=nwt_rayflex', 'user_rayflex', 'ag3nc1a@');
		// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// $sql = "INSERT INTO contato (`nome`, `email`, `telefone`, `celular`, `tipo`, `mensagem`) VALUES (:nome, :email, :telefone, :celular, :tipo, :mensagem)";
		// $stmt = $pdo->prepare($sql);
		// $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
		// $stmt->bindParam(':email', $email, PDO::PARAM_STR);
		// $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
		// $stmt->bindParam(':celular', $celular, PDO::PARAM_STR);
		// $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR); 
		// $stmt->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);
		
		return 'success';
		
	 } else {  
		return $mail2->ErrorInfo;
	 }
}

?>