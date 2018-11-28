<?php

include_once('conexao/conexao.php');

	//CAPTURANDO DADOS DIGITADOS NO FORMULÁRIO
	$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	$telefone =filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
	$email    = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
	$endereco = filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_SPECIAL_CHARS);
	$data     =filter_input(INPUT_POST,'data',FILTER_SANITIZE_SPECIAL_CHARS);

	//ENVIANDO DADOS PARA A TABELA
	$inserir_banco = $conexao->query("INSERT INTO tb_contato VALUES(DEFAULT,'$nome','$telefone','$email','$endereco','$data')");
$_SESSION['msg'] = "<p class='center green-text'>".'Obrigado por escolher a gente, entraremos em contato em breve'."</p>";
	header("Location:index.php");

?>