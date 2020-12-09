<?php
include "conectar.php";

$noticia = $_POST['noticia'];

$manha = $_POST['manha'];
$tarde = $_POST['tarde'];
$noite = $_POST['noite'];

$sql->query("INSERT INTO noticia(noticia) VALUES ('$noticia')");

$dados = $sql->query("SELECT MAX(id_noticia), noticia.noticia, noticia.`data` FROM noticia");

while($col = mysqli_fetch_array($dados)){
	$id = $col['MAX(id_noticia)'];

}
if($noticia == NULL){
	header('location: ../adm/adm_alertas.php?msg=2');
}else{
			$sql->query("INSERT INTO `periodo`(`manha`, `tarde`, `noite`, `id_noticia`) VALUES ('$manha', '$tarde', '$noite', '$id')");
			header('location: ../adm/adm_alertas.php?msg=1');	
		}

?>
	
</body>
</html>
