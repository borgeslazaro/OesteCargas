<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>OESTE CARGAS</title>

	<style type="text/css">
	.formulario{
		background-color: #808080;
		color: #000;
		
		padding: 5px;
		font-size: 1.9rem;
		font-weight: bold;

	}

	input {

		font-size: 1.7rem;
		padding: 4px;
		border-radius: 10px;
		border: solid;

	}
	h3{
		text-align: center;
	}
	h4{
		text-align: center;
	}


	#grid-container{
		background-color: rgba(200, 0, 0, 0.15);
	}

	.grid{

		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
		grid-gap: 5px;
		max-width: 1200px;
		margin: 0 auto;


	}
	.grid div{
		font-size: 1.6rem;
		text-align: center;
		background-color: rgba(255, 255, 255, 1.0);
		padding-bottom: 25px ;
	}

	img{
		width: 80%;
		height: 85%;
		
	}
	a {
		font-size: 17px;
		color: rgba(255, 0, 0, 1.0);

	}
	fieldset {
		border: solid;
		padding: 3%;
		font-size: 17px;
		font-weight:bold ;
		text-align: left;
		border-radius:20px ;

	}
	select	{
		border-radius: 10px;
		border: solid;
		padding: 5px;
		font-size: 17px;
		font-weight: bold;


	}

	option {

		font-size: 17px;
		font-weight: bold;
		padding: 5px;

	}
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
		
		
			
		<div class="formulario">
			<form action="analise.php" method="post" target="">


				<label for="pesquisa">Pesquisar</label>&nbsp
				
				<input type="text" id="pesquisa" name="pesquisa" placeholder="Digite aqui a sua Pesquisa">

				
				<br><br>
				<input type="submit" name="enviar" value="Pesquisar"><br><br>



			</form>

		
		</div>
		<br><br>
		<section class="container" id="grid-container">

			<div class="grid">

				<div>
					<h2>Seja Parceiro Oeste</h2>
					<img src="img/img-meio.jpeg">
					<a href="oeste.html">Saiba Mais</a>
				</div>


				<div>
					<h2>Frotas totalmente novas</h2>
					<img src="img/img-site.jpeg"><br>
					<a href="oeste.html">Saiba Mais</a>
				</div>

				<div>
					<img src="img/img-meio.jpeg">
					<a href="oeste.html">Saiba Mais</a>
				</div>

				


			</div>
			

		</section>
		<br>
		<section>
			<?php
			$data = $_GET["data"];
			$obs = $_GET["obs"];
			$volume = $_GET["volume"];
			$nome = $_GET["nome"];

			$volume = $volume*60;
			if ($volume == "Caixa") {
				echo "o valor total do orçamento é  $volume";
				
			}





			

			?>
			<br><br>

			<a href="index.php"> << VOLTAR </a>
			

		</section>
		<br><br>

		


			

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