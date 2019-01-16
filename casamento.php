<?php
ob_start();
include 'conexao/config.php';

session_start();
if (!isset($_SESSION["logado"])) {
	header("location:login.php");
}

$desc_evento1 = "Nós mantemos este amor numa fotografia";
$desc_evento2 = "Onde o tempo está congelado para sempre ... ";


?>

<title><?= CASAMENTO ?></title>

<?php include_once("includes/header.php"); ?>

<!-- BANNER SLIDER -->
<div class="slider" style="margin-top: -1.4em;">
	<ul class="slides">
		<?php
		for($banner = 1; $banner <= 6; $banner++){
			echo "<li>";
			echo "<img src='img/banner-slider-$banner.jpg' alt='Banner de evento'>";
			echo "<div class='caption black-text left-align'>
			<h4 style='color: white';>$desc_evento1</h4>
			<h5 style='color: white';>$desc_evento2</h5>
			<a href='#formularioModal' class='btn teal modal-trigger'>contrate</a>
			</div> ";
		}
		echo "</li>";
		?>
	</ul>
</div>
</div>

	<!-- GALERIA DE FOTOS -->
	<div class="row container">
		<div class="col s12 grey-text"><h4 class="center">Casamentos</h4></div>
		<ul>
			<?php
				for($c = 1; $c <= 16; $c++){
					echo "<li class='col s12 m3 galeria'>";
					echo "<img src='casamento/casamento$c.jpg' class='responsive-img materialboxed' data-caption='Casamentos'>";
					echo "</li>";
				}
			?>
		</ul>
	</div>

	<div class="row container"><br><hr></div>

	<!-- CARD HORIZONTAL -->
	<div class="row container">
		<div class="col s12 center grey-text">
			<h4>Sobre casamentos</h4>
		</div>
		<div class="col s12">
			<div class="card horizontal">
				<div class="card-image">
					<img src="img/horizontal-card.jpg" class="responsive-img">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<span class="card-title">Tipos de casamentos mais comuns</span><br>
						<p>
							Vocês resolveram se casar, isso já é um grande passo para a história do casal. Mas como decidir qual o tipo de casamento vocês querem? São muitas opções, não é mesmo? Por isso, vamos te ajudar. !
						</p><br>
						<blockquote>
							<b>Em diligência: </b>Este casamento é celebrado fora do cartório, por vontade dos noivos e consentimento do juiz. Mas, assim como o casamento em cartório, este deve ser realizado de forma pública, com o juiz de casamentos, escrevente, os padrinhos, convidados e os noivos.
						</blockquote>
						<blockquote>
							<b>Casamento religioso: </b>Aquele que é celebrado fora das dependências do cartório, mas quem está presente no ato do casamento não é o juiz e sim uma autoridade religiosa (um padre ou pastor etc). 
						</blockquote>
						<blockquote>
							<b>Casamento em cartório: </b>Este casamento é realizado na sala de audiência ou no local determinado pelo cartório. A cerimônia é pequena apenas com os noivos, o juiz de casamentos, o escrevente autorizado e os padrinhos.
						</blockquote>
					</div>
					<div class="card-action"><a href="">indicações</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- CARDS REVEAL -->
	<div class="row container">

		<div class="col s12 grey-text center"><h4>Outros Serviços</h4></div>
		<!-- PRIMEIRO CARTÃO -->
		<div class="col s12 m4">
			<div class="card sticky-action">
				<div class="card-image">
					<img src="eventos/evento_footer2.jpg" class="activator">
				</div>
				<div class="card-content">
					<span class="card-title activator">
						<h5>Simpósios<i class="material-icons right">more_vert</i></h5>
					</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores magnam repellat.<br>
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title"><h5>Contrate para Casamentos<i class="material-icons right">close</i></h5></span>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
						Fotógrafo: <strong class="blue-text">Paul Thomas</strong>
					</blockquote>
					<div class="card-image">
						<img src="img/card-reveal-image-1.jpg" alt="">
					</div>
				</div>
				<div class="card-action">
					<a href="#formularioModal" class="modal-trigger">entrar em contato</a>
				</div>
			</div>
		</div>

		<!-- SEGUNDO CARTÃO -->
		<div class="col s12 m4">
			<div class="card sticky-action">
				<div class="card-image">
					<img src="img/card-image-2.jpg" class="activator">
				</div>
				<div class="card-content">
					<span class="card-title activator">
						<h5>Books<i class="material-icons right">more_vert</i></h5>
					</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores magnam repellat.
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title"><h5>Contrate para Books<i class="material-icons right">close</i></h5></span>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
						Fotógrafo: <strong class="blue-text">James Gere</strong>
					</blockquote>
					<div class="card-image"><img src="img/card-reveal-image-2.jpg" alt=""></div>
				</div>
				<div class="card-action">
					<a href="#formularioModal" class="modal-trigger">entrar em contato</a>
				</div>
			</div>
		</div>

		<!-- TERCEIRO CARTÃO -->
		<div class="col s12 m4">
			<div class="card sticky-action">
				<div class="card-image">
					<img src="img/card-image-3.jpg" class="activator">
				</div>
				<div class="card-content">
					<span class="card-title activator">
						<h5>Ensaios<i class="material-icons right">more_vert</i></h5>
					</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores magnam repellat.
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title"><h5>Contrate para Ensaios Fotográficos<i class="material-icons right">close</i></h5></span>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
						Fotógrafo: <strong class="blue-text">Thomas Anderson</strong>
					</blockquote>
					<div class="card-image"><img src="img/card-reveal-image-3.jpg" alt=""></div>
				</div>
				<div class="card-action">
					<a href="#formularioModal" class="modal-trigger">entrar em contato</a>
				</div>
			</div>
		</div>

	</div>

	<!-- FORMULÁRIO MODAL NO RODAPÉ -->
	<div class="modal bottom-sheet" id="formularioModal">
		<div class="modal-content">
			<form action="contato.php" method="post">
				<fieldset class="row container">
					<legend><h6>Informe Seus Dados e Data do Evento</h6></legend>
					<div class="input-field col s12 m4">
						<label for="#nome">Nome</label>
						<input type="text" id="nome" name="nome" class="validate" required autofocus>
					</div>

					<div class="input-field col s12 m4">
						<label for="#telefone">Telefone</label>
						<input type="tel" id="telefone" name="telefone" class="validate" required>
					</div>

					<div class="input-field col s12 m4">
						<label for="#email">E-mail</label>
						<input type="email" id="email" name="email" class="validate" required>
					</div>

					<div class="input-field col s12 m6">
						<label for="#endereco">Endereço</label>
						<input type="text" id="endereco" name="endereco" class="validate" required>
					</div>

					<div class="input-field col s12 m6">
						<input type="date" id="data" name="data" class="validate">
					</div>

					<div class="col s12 m6">
						<button class="btn" type="submit">enviar</button><br><br>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!-- FIM DO FORMULÁRIO -->

<?php include_once("includes/footer.php"); ?>