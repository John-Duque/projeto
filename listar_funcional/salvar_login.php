<?php
session_start();
include "conectar.php";

$nome  = $_POST['nome'];
$senha = $_POST['senha'];
$dados = $sql->query("SELECT * FROM `funcionario` WHERE nome_funcionario = '$nome' AND senha = '$senha'" );
//echo "<pre>";

    $_SESSION['nome_session'] = $login;
    $_SESSION['senha_session'] = $senha;
	$_SESSION['acesso'] = $acesso;

$acesso = mysqli_num_rows($dados);

if ($acesso == 1){
	header('location: ../adm/adm_alertas');
}
else{
	header('location: ../Login/login.php?msg=1');
}

?>
