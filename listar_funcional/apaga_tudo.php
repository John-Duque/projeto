<?php
// Aqui voc� se conecta ao banco
include "conectar.php";

$apaga = $_GET["usuario"];
// Executa uma consulta que deleta uma not�cia
$sqlt = "DELETE FROM usuario";

$query = $sql->query($sqlt);

header("Location: ../adm/adm_forum.php");
?>