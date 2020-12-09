<?php
include "conectar.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$sql->query("INSERT INTO usuario(nome,email,telefone,mensagem)
VALUES ('$nome','$email','$telefone','$mensagem')");


if($sql){
    header('location:../index.php');
}
else{
    echo "DEU ERRADO";
}

//echo "<script type=\"text/javascript\">alert('Dados Cadastrado com Sucesso!');</script>";
//redirecionamento da pagina
//echo "<script type=\"text/javascript\">window.location=\"../adm/cadastro_funcionario.php\";</script>";
?>
