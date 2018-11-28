<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Fotografia</title>
	<meta name="author" content="Fernando Rodrigues da Silva">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- IMPORTANDO GOOGLE ICONS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- IMPORTANDO CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
	<body>
		<!-- MENUS E BANNER SLIDER -->
		<div class="row">
			<nav class="blue">
				<div class="nav-wrapper container">
					<a href="home.php" class="brand-logo">Richard's</a>
					<a href="" class="button-collapse" data-activates="mobile"><i class="material-icons">menu</i></a>

					<!-- MENU PARA DESKTOP -->
					<ul class="right hide-on-med-and-down">
						<li><a href="home.php"><i class="material-icons left">home</i>Início</a></li>
						<li><a href="casamento.php"><i class="material-icons left">camera_alt</i>Casamento</a></li>
						<li><a href="books.php"><i class="material-icons left">camera_roll</i>Ensaios</a></li>
						<li><a href="evento.php"><i class="material-icons left">access_time</i>Eventos</a></li>
						<li><a href="login.php"><i class="material-icons left">person</i>Login</a></li>
						<li>
							<?php
							if (isset($_SESSION["logado"])) {
								$user = $_SESSION["logado"];?>
								<a href="conexao/sair.php">Sair
									<span style="color:red;"><i class="material-icons left">close</i></span>
								</a>
								<?php
							}
							?>
						</li>
					</ul>
					<!-- MENU PARA DISPOSITIVOS MÓVEIS -->
					<ul class="side-nav" id="mobile">
						<li><img src="img/card-reveal-image-2.jpg" width="100%"></li>
						<li><a href="home.php"><i class="material-icons left">home</i>Início</a></li>
						<li><a href="casamento.php"><i class="material-icons left">camera_alt</i>Casamentos</a></li>
						<li><a href="books.php"><i class="material-icons left">camera_roll</i>Ensaios</a></li>
						<li><a href="login.php"><i class="material-icons left">person</i>Login</a></li>
					</ul>
				</div>
			</nav>
		</div>


