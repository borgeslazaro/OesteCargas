<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>OESTE CARGAS</title>
	<style type="text/css">
	


	</style>

	
	
		
		
		



</head>
<body>
	<nav id="menu">
<ul >
		<li> <a href="https://ssw.inf.br/2/rastreamento">Rastreio</a></li>
		<li> <a href="#">Sobre </a> </li>
		<li> <a href="#">Quem Somos </a> </li>
		<li> <a href="#">Contato </a> </li>


	</ul>

	</nav>
	

		<header>
				<h3>TRANSPORTADORA OESTE CARGAS</h3>
				<h4>TRANSPORTANDO SAÚDE</h4>
		</header>
		<br>
		
	<?php

		$pesquisa = $_GET["pesquisa"];
		switch ($pesquisa){ 

		case 'Frotas':

						echo "Nossas frotas se adaptam ao tipo de entrega! Seja uma Fiorino ou uma Carreta, nós atendemos no mesmo prazo e com total segurança!";
			break;

			
		
		default:
			// code...
		break;
	};


	?>


	<a href="index.php"> << voltar ao inicio </a>
		
		


			

	<footer>
	<h3>Transportadora Oeste Cargas</h3>
	<h4>Especialistas no transporte de medicamentos</h4>
	<br>
			<p class="texto-rodape"><b>Contatos</b></p>
			<br>
			<p class="texto-rodape">E-mail: atendimento@oestecargas.com.br</p>
			<p class="texto-rodape">WhatsApp: 93-99111-6806</p>
			<br>
			<p class="texto-rodape" >Cnpj:10.891.580/0001-08 
									Transportadora Oeste Cargas LTDA
			</p>
			


		</footer>
</body>
</html>