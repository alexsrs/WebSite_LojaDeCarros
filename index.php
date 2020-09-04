<!DOCTYPE html>
<html>
<head>
	<title>Website Loja de Carros</title>
	<link rel="shortcut icon" type="image-x/png" href="images/icone.ico" />
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<header style="border-bottom: 2px solid #EB2D2D;">
		<div class="container">
			<div class="logo">
				<img src="images/logo.jpg">
			</div><!--logo-->
			<nav class="desktop">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a href="contato" href="">Contato</a></li>
				</ul>
			</nav><!--desktop-->
			<nav class="mobile">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a href="contato" href="">Contato</a></li>
				</ul>
			</nav><!--mobile-->
			<div class="clear"></div>
		</div><!--container-->
	</header>

<?php
	if(isset($_GET['url'])){
		if(file_exists($_GET['url']).'.html'){
			include($_GET['url'].'.html');
		}else{
			include('404.html');
		}
	}else{
		include('home.html');
	}
?>

	<footer>
		<div class="container">
			<nav>
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a href="contato" href="">Contato</a></li>
				</ul>
			</nav>
			<p>© 2019 Landing Page development by <a href="http://www.creapix.com.br">Creapix</a><br />
			+55 (21) 98487-0182 - <a href="mailto:atendimento@creapix.com.br?subject=LandingPage2">atendimento@creapix.com.br</p>
		<div class="clear"></div><!--clear-->
		</div><!--container-->
	</footer>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>