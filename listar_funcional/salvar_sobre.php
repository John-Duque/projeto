<?php
include "conectar.php";

$id = $_GET['id'];
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$introducao = $_POST['introducao'];
$uploaddir = 'imagens/'; /*directório onde será gravado a imagem*/
/* para fazer com que a imagem seja salva no banco com o caminho e com o nome do rm*/
$arquivo = $_FILES["userfile"]["name"];
$separa = explode(".", $arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
$imagem = $id . '.' . $tipo;
/* recebe o $uploaddir com o caminho da pasta onde as imagens são salvas e a $imagem com o nome da imagem transformado para o rm */
if (move_uploaded_file($_FILES['userfile']['tmp_name'],'../' . $uploaddir . $imagem)) {
    $uploadfile = $uploaddir . $imagem;
} else {
    echo "não foi possível concluir o upload da imagem.";
}


if($titulo == null or $data == null or $introducao == null){
    header('location: ../adm/adm_sobre.php?msg=2');
}
else {
    $sql->query("UPDATE cultura SET titulo='$titulo', data='$data', introducao ='$introducao',foto='$uploadfile' WHERE id_cultura = $id");
    header('location: ../adm/adm_sobre.php?msg=1');
}

?>