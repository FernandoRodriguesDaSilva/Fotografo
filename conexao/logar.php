<?php session_start();
require_once "conexao.php"; 

if (isset($_POST['btn_login'])){
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
// fazer a consulta ao banco de dados entre usuario e senha
	$login = "SELECT * FROM tb_usuarios WHERE email = '{$email}' and senha = '{$senha}' ";
	// Usuário não forneceu a senha ou o login 
if(!$email || !$senha) { 
	$_SESSION['msg'] = "<p class='center red-text'>".'Você deve digitar seu email e senha para logar !'."</p>";
	header("location:../login.php");
exit; 
} 
	// Acessando banco de dados
	$acesso = mysqli_query($conexao, $login);
	// testando conexão se não acessar mostra falha na consulta ao banco
	if (!$acesso) {
		die("Falha na consulta ao banco");
	}
	$informacao = mysqli_fetch_assoc($acesso);
	if (empty($informacao)) {
		$_SESSION['msg'] = "<p class='center red-text'>".'Email ou senha inválido !'."</p>";
	header("location:../login.php");
	} else {
		//Iniciar a variavel de sessão pelo clienteID do banco de dados
		$_SESSION["logado"] = $informacao["id_usuario"];
		header("location:../home.php");
	}
	}