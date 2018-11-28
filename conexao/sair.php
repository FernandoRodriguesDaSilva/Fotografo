<?php 
// Deslogar do site
session_start();
unset($_SESSION["logado"]);
header("Location:../index.php");