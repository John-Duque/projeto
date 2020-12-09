<?php
// Aqui voc� se conecta ao banco
include "conectar.php";

$codigo_usuario = $_GET["codigo_usuario"];
// Executa uma consulta que deleta uma not�cia
$sqld = "DELETE FROM usuario WHERE codigo_usuario=$codigo_usuario";

$query = $sql->query($sqld);

header("Location: ../adm/adm_forum.php");
?>