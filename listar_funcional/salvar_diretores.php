<?php
include "conectar.php";

$id = $_GET ['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$uploaddir = 'imagens/'; /*directório onde será gravado a imagem*/
/* para fazer com que a imagem seja salva no banco com o caminho e com o nome do rm*/
$arquivo = $_FILES["userfile"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
$imagem = $id.'.' .$tipo;
/* recebe o $uploaddir com o caminho da pasta onde as imagens são salvas e a $imagem com o nome da imagem transformado para o rm */
if (move_uploaded_file($_FILES['userfile']['tmp_name'], '../'. $uploaddir . $imagem)) {
    $uploadfile = $uploaddir . $imagem;
} else {
    echo"não foi possível concluir o upload da imagem.";
}


if($nome == null or $cargo == null or $uploaddir == null){
    header('location: ../adm/adm_diretores.php?msg=2');
}else{
    $sql->query("UPDATE direcao SET nome='$nome', cargo='$cargo', foto='$uploadfile' WHERE direcao.id_direcao = $id");
    header('location: ../adm/adm_diretores.php?msg=1');
}
?>