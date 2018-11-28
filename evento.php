<?php
session_start();
if (!isset($_SESSION["logado"])) {
	header("location:login.php");
}

$desc_evento1 = "Com a nossa equipe seu evento fica guardado para sempre ...";
$desc_evento2 = "Gamer, coorporativo, maker , geek , automotivo, alimentício,  palestrivo, seminárismo ";

?>

<?php include_once("includes/header.php"); ?>

<!-- BANNER SLIDER -->
<div class="slider" style="margin-top: -1.4em;">
	<ul class="slides">
		<?php
		for($banner = 1; $banner <= 4; $banner++){
			echo "<li>";
			echo "<img src='eventos/evento_banner_$banner.jpg' alt='Banner de evento'>";
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
	<div class="col s12 grey-text"><h4 class="center">Eventos</h4></div>
	<ul>
		<?php
		for($c = 1; $c <= 12; $c++){
			echo "<li class='col s12 m3 galeria'>";
			echo "<img src='eventos/evento$c.jpg' class='responsive-img materialboxed' data-caption='Um novo conceito em fotos'>";
			echo "</li>";
		}
		?>
	</ul>
</div>

<div class="row container"><br><hr></div>

<!-- CARD HORIZONTAL -->
<div class="row container">
	<div class="col s12 center grey-text">
		<h4>Sobre os eventos</h4>
	</div>
	<div class="col s12">
		<div class="card horizontal">
			<div class="card-image">
				<img src="img/horizontal-card.jpg" class="responsive-img">
			</div>
			<div class="card-stacked">
				<div class="card-content">
					<span class="card-title">Richard Thompsom - Fotógrafo</span><br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora voluptates delectus excepturi mollitia obcaecati at vitae repellendus voluptate fugit repudiandae, id, ea aliquid, perferendis animi cumque consectetur autem veniam nam!
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste dolor aut dignissimos odio obcaecati iusto ea, animi nam, quidem molestias eius soluta sequi quam perspiciatis porro, est ex adipisci.
					</p>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam consectetur alias, esse placeat nisi ut, dolore sapiente doloremque voluptatum.
					</blockquote>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam consectetur alias, esse placeat nisi ut, dolore sapiente doloremque voluptatum.
					</blockquote>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam consectetur alias, esse placeat nisi ut, dolore sapiente doloremque voluptatum.
					</blockquote>
				</div>
				<div class="card-action"><a href="">indicações</a></div>
			</div>
		</div>
	</div>
</div>
<!-- CARDS REVEAL -->
<div class="row container">

	<div class="col s12 grey-text center"><h4>Nossos Serviços</h4></div>
	<!-- PRIMEIRO CARTÃO -->
	<div class="col s12 m4">
		<div class="card sticky-action">
			<div class="card-image">
				<img src="eventos/evento_footer1.jpg" class="activator">
			</div>
			<div class="card-content">
				<span class="card-title activator">
					<h5>congressos<i class="material-icons right">more_vert</i></h5>
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
				<img src="eventos/evento_footer2.jpg" class="activator">
			</div>
			<div class="card-content">
				<span class="card-title activator">
					<h5>Simpósios<i class="material-icons right">more_vert</i></h5>
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
				<img src="eventos/evento_footer3.jpg" class="activator">
			</div>
			<div class="card-content">
				<span class="card-title activator">
					<h5>Acadêmicos<i class="material-icons right">more_vert</i></h5>
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