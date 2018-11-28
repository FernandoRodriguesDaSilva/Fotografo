<?php

session_start();

include "conexao.php";

$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);

$Inserir_banco = $conexao->query("INSERT INTO tb_comentarios VALUES(DEFAULT,'$comentario')");
	// se alguma linha for afetada
$affected_rows = mysqli_affected_rows($conexao);
	// se uma linha for afetada na tabela
if($affected_rows > 0){
	$_SESSION['msg'];
	header("Location:../entry.php");
}