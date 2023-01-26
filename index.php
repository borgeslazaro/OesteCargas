<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/oeste.css">
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
	<section>
		<h2>Preencha os campos abaixo e cadastre-se</h2>
		<br>
		<form action="validar.php" method="post" id="usuarios" target="">

			<label for="usuario">Usuário</label><br>
			<input type="text" id="usuario" name="usuario" placeholder="Crie um Nome de Usuário">
			<br><br>
			<label for="email">E-Mail</label><br>
			<input type="email" id="email" name="email" placeholder="Digite seu e-mail">
			<br><br>
			<label for="senha">Senha</label><br>
			<input type="password" id="senha" name="senha" placeholder="Crie uma senha"><br><br>

			<input type="submit" class="botao" name="cadastrar">
			
		</form>

	</section>
	

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
			
			<fieldset>
				<legend><h2>Faça sua cotação</h2></legend>
					<form action="cotar.php" method="get" target="">

						<label for="data">Data da cotação</label><br>
						<input type="date" id="data" name="data">
						<br><br>

						<label for="volume">Quantidade de Volume</label><br>
						<input type="number" id="volume" name="volume"><br><br>

						<label>Escolha o tipo de volume</label><br>
						<select>
							<option>Caixa</option>
							<option>Envelope</option>
						</select><br><br>


						<label for="nomeCliente">Insira seu Nome</label><br>
						<input type="text" id="nomeCliente" name="nome" placeholder="Insira seu nome completo">
						<br><br>

						<label for="obs">Observações Adicionais</label><br>
						<input type="text" id="obs" name="obs" placeholder="Alguma Observação?">
						<br><br>

						<input type="submit" name="Enviar">

			
					</form>

			</fieldset>


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
			<div class "WhatsApp">
				<img src="whatsapp.png" width="50" alt="Fale conosco via Whatsapp" title="Fale conosco via Whatsapp">
			</div>

			<p class="texto-rodape" >Cnpj:10.891.580/0001-08 
									Transportadora Oeste Cargas LTDA
			</p>
			


		</footer>
</body>
</html>