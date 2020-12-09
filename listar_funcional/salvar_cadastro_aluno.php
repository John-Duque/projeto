<?php
include "conectar.php";

$ra = $_POST['ra'];
$nome = $_POST['nome'];
$sala = $_POST['sala'];
$periodo = $_POST['periodo'];
$serie = $_POST['serie'];
$turma = $_POST['turma'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

if ($ra == null or $nome == null or $sala == null or $periodo == null or $serie == null or $turma == null or $endereco == null or $telefone == null) {
    header('location: ../adm/cadastro_aluno.php?msg=2');
} else {
    $sql->query("INSERT INTO aluno(ra_aluno, nome_aluno,sala_aluno,periodo_aluno,serie_aluno,turma_aluno,endereco_aluno, telefone_aluno)
    VALUES ('$ra','$nome','$sala','$periodo','$serie','$turma','$endereco','$telefone')");
    header('location: ../adm/cadastro_aluno.php?msg=1');
    
}

?>