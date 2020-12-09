<?php
include "conectar.php";

$nome = $_POST['nome'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$data = $_POST['data'];
$quantidade = $_POST['quantidade'];
$genero = $_POST['genero'];


if($nome == null or $autor == null or $editora == null or $data == null or $quantidade == null or $genero == null){
    header('location: ../adm/livros.php?msg=2');
}
else{
    $sql->query("INSERT INTO livro (nome_livro,autor_livro,editora_livro,data_livro,quantidade_livro,genero_livro)
    VALUES ('$nome','$autor','$editora','$data','$quantidade','$genero')");
    header('location: ../adm/livros.php?msg=1');
}
?>
