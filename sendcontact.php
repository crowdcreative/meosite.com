<?php session_start(); ?>

<html>
<head>

	<title>MeoSite | Seu site feito por uma rede de profissionais criativos</title>
	<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 

<style>
body{
	background:#ffc000;
	color:#000000;
}

a{
	text-decoration:none;
}

a:hover{
	text-decoration:none;
}

#email{
    background: url("images/email-recebido.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    height: 300px;
    left: 50%;
    margin-left: -225px;
    position: absolute;
    top: 60px;
    width: 450px;
}

#resposta{
	font-family: Helvetica,arial,sans-serif;
	left: 50%;
	line-height: 25px;
	margin-left: -395px;
	position: absolute;
	text-align: center;
	top: 380px;
	width: 695px;
}

#retornar{
    background: none repeat scroll 0 0 #111111;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 4px 0 #000000;
    color: #FFFFFF;
    cursor: pointer;
    display: block;
    font-family: helvetica,arial;
    font-size: 9px;
    font-style: normal;
    left: 50%;
    margin-left: -110px;
    padding: 8px 12px;
    position: absolute;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    top: 500px;
    transition: all 0.1s ease 0s;
    z-index: 999;
}

#retornar:active {
    box-shadow: 0px 1px 0px #000000;
	top:503px;
}


</style>


</head>
<body>


	<div id="email"></div>


	<?php

	if(isset($_SESSION['form_token'])){
		if($_POST['form_token'] != $_SESSION['form_token']){
            $block = "Você já enviou seu contato =)";
		?>	
			<div id="resposta">
				<span><b><?php echo $block; ?></b><span>
			</div>
			
		<?php }else{
    
			$con = mysqli_connect("localhost","porto719_jonatas","MEOsite3219","porto719_meositecom");
			// Check connection
			if ($mysqli->connect_errno) {
				printf("Connect failed: %s\n", $mysqli->connect_error);
				exit();
			}

			$sql = "INSERT INTO clientes (nome, email, mensagem) VALUES ('$_POST[nome]','$_POST[email]','$_POST[mensagem]')";

			if (!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
			} ?>
			
			
			<div id="resposta">
				<span><b><?php echo $_POST['nome']; ?></b>, sua solicitação foi enviada com sucesso! <br/>Em breve nosso Trustee irá conversar com você pelo email <b><?php echo $_POST['email']; ?></b>.</br/> Obrigado.<span>
			</div>
			
			<a href="http://www.meosite.com"><div id="retornar">Retornar para o site</div></a>
			
			
			<?php 
			 // Enviar email automático
			$to = $_POST['email'];
			$subject = "[MeoSite] Olá, recebemos o seu contato!";
			$message = "<br/><br/><p>Olá <b> " . $_POST['nome'] . "</b>, <br/><br/> recebemos o seu e-mail e em até <b>24 horas</b> o nosso trustee entrará em contato com você. <br/><br/>Obrigado! </p> <br/><br/><p>Resposta automática à seguinte mensagem enviada: </p> <p><i>" . $_POST['mensagem'] . "<br/>-" . $_POST['nome'] . "</i></p>";
			$from = "MeoSite - Jonatas Eduardo <jonataseduardo@meosite.com>\n";
			$headers = "From:" . $from;
			
			$headers .= "Return-Path:" . $from;
			
			// Este sempre deverá existir para garantir a exibição correta dos caracteres
			$headers .= "MIME-Version: 1.1\n";
				
			// Para enviar o e-mail em formato HTML com codificação de caracteres Europeu Ocidental (usado no Brasil)
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			
			// Para enviar o e-mail em formato HTML com codificação de caracteres Unicode (Usado em todos os países)
			$headers .= "Content-type: text/html; charset=utf-8\n";
			
			// E-mail que receberá a resposta quando se clicar no 'Responder' de seu leitor de e-mails
			$headers .= "Reply-To:" . $from;
			
			// para enviar a mensagem em prioridade máxima
			$headers .= "X-Priority: 1\n";
			
			mail($to,$subject,$message,$headers);
			
			$eu = "jonataseduardo@meosite.com";
			$subjectAviso = "[MeoSite] Recebemos o contato do cliente" . $_POST['nome'];
			$messageAviso = "Um cliente entrou em contato. <br/> Seu nome é: " . $_POST['nome'] . "<br/>Seu email: " . $_POST['email'] . "<br/>Sua mensagem: " . $_POST['mensagem'];
			
			mail($eu,$subjectAviso,$messageAviso,$headers);
			
			unset( $_SESSION['form_token']);
			
			mysqli_close($con);  
		}
	}else{
		$block = "Seu contato já foi recebido, obrigado!"; ?>	
		
		<div id="resposta">
			<span><b><?php echo $block; ?></b><span>
		</div>
		
		<a href="http://www.meosite.com"><div id="retornar">Retornar para o site</div></a>
			
	<?php } ?>


	


	
	
	
	

</body>

</html>