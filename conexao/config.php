<?php

define('SITE_NAME','Fotografo');
define('CASAMENTO','Casamentos');
define('status_site',1);   // 1 online // 2 offline // 3 Manutenção
date_default_timezone_set('America/Sao_Paulo');


function site_inativo(){
	echo '                
	<section class="">
	<h1 class="">Desculpe-nos ... Este Site está fora do ar!</h1>
	<p class="">Por favor ! Retorne em algumas horas!</p>
	</section>
	<div class="espaco"></div>
	';
}

function site_manutencao(){
	echo '     
	<section class="">
	<h1 class="">Desculpe-nos ... Este Site está em manutenção!</h1>
	<p class="">Por favor ! Retorne em algumas horas!</p>
	</section>
	<div class="espaco"></div>
	';
}

// Banco de dados 

define('DB_contatos','td_contatos');
define('DB_usuarios','td_usuarios');
define('DB_comentarios','td_comentarios');


?>