<!-- À QUEM ADQUIRIU ESSE TEMPLATE: QUE DEUS TE ABENÇOE -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Richard's</title>
	<meta name="author" content="Fábio Souza - FSN Cursos Online">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- IMPORTANDO CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
<body>
	<!-- BANNER SLIDER -->
	<div class="slider fullscreen">
		<ul class="slides">
			<li><!-- BANNER 1 -->
				<img src="img/slider-1.jpg">
				<div class="caption left-align">
					<h4>Richard's Thompsom</h4><h5>Fotógrafo</h5>
					<a href="home.php" class="btn green lighten-2">Ler mais</a>
				</div>
			</li>

			<li><!-- BANNER 2 -->
				<img src="img/slider-2.jpg">
				<div class="caption center-align">
					<h4>Contrate um Fotógrafo ...</h4><h5>... e eternize seus momentos!<br></h5>
					<a href="home.php" class="btn green lighten-2">ler mais</a>
				</div>
			</li>	
			<li><!-- BANNER 3 -->
				<img src="img/casamento_foto.jpg">
				<div class="caption left-align">
					<h4>Descubra um novo conceito em fotos ...</h4><h5>... compartilhe essa experiência !</h5>
					<a href="home.php" class="btn green lighten-2">Ler mais</a>
				</div>
			</li>			
		</ul>
	</div>

	<!-- IMPORTANDO JQUERY E JAVASCRIPT -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/materialize.min.js"></script>

	<!-- CONFIGURAÇÕES JQUERY E JAVASCRIPT -->
	<script>
		$('document').ready(function(){
			$('.button-collapse').sideNav();
			$('.slider').slider();
			$('.modal-trigger').leanModal();
		});
	</script>
</body>
</html>