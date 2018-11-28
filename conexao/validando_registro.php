<?php
session_start();
include_once "conexao.php";
// filtro nas váriaveis
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $conexao->query("select email from tb_usuarios"); 
$array_emails = [];

while($emails = $querySelect->fetch_assoc()){
	$emails_existentes = $emails['email'];
	array_push($array_emails,$emails_existentes);
}
// se email estiverem cadastrados
if(in_array($email,$array_emails)){
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse email'."</p>";
	header("Location:../login.php");

}else {// Se não existir email igual então adiciona no banco
	$inserir_banco = $conexao->query("INSERT INTO tb_usuarios VALUES(DEFAULT,'$nome','$sobrenome','$telefone','$email','$senha')");
	// Se  alguma linha foi afetada no banco
	$linha_afetada = mysqli_affected_rows($conexao);
	// Se linhas afetadas for maior que 0
	if($linha_afetada > 0){
	// Exibe mensagem
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
		header("Location:../login.php");
	}
}



