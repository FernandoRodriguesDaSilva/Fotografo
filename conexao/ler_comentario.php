<?php

include_once "conexao.php";

$comentario = filter_input(INPUT_POST,'comentario',FILTER_SANITIZE_SPECIAL_CHARS);

$consultar_banco = $conexao->query("SELECT * FROM tb_comentarios");
while ($registros = $consultar_banco->fetch_assoc()){
	$comentario = $registros['comentario'];

echo "<tr>"; // onde vai capturar os dados no banco
echo "<td>$comentario</td>";
echo "</tr>";

}