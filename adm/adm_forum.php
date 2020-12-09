<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['nome_session']) and !isset($_SESSION['senha_session'])) {
    header("location:../Login/login.php");
    exit;
}
?>


<?php
include "../listar_funcional/conectar.php";
$dados = mysqli_query($sql, "SELECT * FROM usuario");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>TCC</title>

	<!-- Bootstrap CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Fontes das letras -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- Tema CSS -->
	<link href="../css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top" class="index">
	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container">

			<!-- Marque e alterne para agrupar para melhor exibição em dispositivos móveis -->

			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Renata Graziano</a>
			</div>

			<!--Colete os links de navegação, formulários e outros conteúdos para alternar -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
                        <a class="page-scroll" href="adm_alertas.php">Alertas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="adm_cultura.php">Cultura</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="adm_sobre.php">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="adm_diretores.php">Diretores</a>
                    </li>
                    <li>
						<a class="page-scroll" href="cadastro_aluno.php">Cadastro Aluno</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="livros.php">Cadastro Livros</a>
					</li>
					<li>
                        <a class="page-scroll" href="../listar_funcional/sair.php">Sair</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->

	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">Bem Vindo !</div>
				<!--<div class="intro-heading">Prazer em telo aqui!</div>-->
				<!--<a href="#services" class="page-scroll btn btn-xl">Saiba Mais</a>-->
			</div>
		</div>
	</header>

	<section>
		<div class="form-group row">
			<div class="container-fluid">
				<label for="staticEmail" class="col-sm-2 col-form-label">Filtros:</label>
				<div class="col-sm-10">
					<?php
					echo "<a class='btn btn-primary' href=../listar_funcional/apaga_tudo.php?usuario role='button'>Apagar tudo</a>";
					?>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<div class="container-fluid">
				<table class="table table-striped table-dark">
					<thead>
						<tr>
							<th scope="col">Nome</th>
							<th scope="col">Email</th>
							<th scope="col">Telefone</th>
							<th scope="col">Mensagem</th>
							<th scope="col">Excluir</th>

						</tr>
					</thead>

					<?php
					while ($linha = mysqli_fetch_array($dados)) {
						$codigo_usuario = $linha['codigo_usuario'];
						$nome = $linha['nome'];
						$email = $linha['email'];
						$telefone = $linha['telefone'];
						$mensagem = $linha['mensagem'];


						echo "
					<tbody>
						<tr>
						<th scope='row'>$nome</th>
						<td>$email</td>
						<td>$telefone</td>
						<td>$mensagem</td>
						<td><a href=../listar_funcional/delete.php?codigo_usuario=$codigo_usuario>Excluir</a><td>
						</tr>
					</tbody>";
					}
					?>
				</table>
			</div>
		</div>
	</section>





	<!-- jQuery -->
	<script src="../vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

	<!-- Contact Form JavaScript -->
	<script src="../js/jqBootstrapValidation.js"></script>
	<script src="../js/contact_me.js"></script>

	<!-- Theme JavaScript -->
	<script src="../js/agency.min.js"></script>
</body>

</html>