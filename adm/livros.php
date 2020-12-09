<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['nome_session']) and !isset($_SESSION['senha_session'])) {
    header("location:../Login/login.php");
    exit;
}
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

	<?php
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];

		if ($msg == 1) {
			echo "
			<center>
				<div class='message'>
					<div class='alert alert-success' role='alert'>
						<a href='../adm/livros.php' class='close' data-dismiss='alert'>&times</a>
						Dados enviados com sucesso.
					</div>
				</div>
			</center>
			";
	}else if($msg == 2){
		echo "
			<center>
				<div class='message'>
					<div class='alert alert-danger' role='alert'>
						<a href='../adm/livros.php' class='close' data-dismiss='alert'>&times</a>
						CPF Inválido.
					</div>
				</div>
			</center>
			";
	}
}
?>
		<!-- Aqui começa o cadastramento do livros seu genero e suas quantidades -->

		<section>
			<form action="../listar_funcional/salvar_livros.php" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<!--form para pegar os dados dos nomes-->
					<div class="form-group col-md-6">
						<label for="inputEmail4">Nome Do Livro</label>
						<input type="text" name="nome" class="form-control" required placeholder="nome completo">
					</div>

					<!--form para pegar os dados do email-->

					<div class="form-group col-md-6">
						<label for="inputEmail4">Autor</label>
						<input type="text" name="autor" class="form-control" required placeholder="autor">
					</div>
					<!-- Form para pegar os dados do RG-->
					<div class="form-group col-md-6">
						<label for="inputEmail4">Editora</label>
						<input type="text" name="editora" class="form-control" required placeholder="editora">
					</div>
					<!-- Form para pegar os dados do CPF-->
					<div class="form-group col-md-6">
						<label for="inputEmail4">Data</label>
						<input type="date" name="data" class="form-control" required placeholder="data">
					</div>

					<!--form para pegar os dados da senha-->

					<div class="form-group col-md-6">
						<label for="inputPassword4">Quantidade</label>
						<input type="text" name="quantidade" class="form-control" required placeholder="quantidade de livros">
					</div>

					<!--form para confirmar a senha do usuario-->
					<div class="form-group col-md-6">
						<label for="inputPassword4">Gênero</label>
						<input type="text" name="genero" class="form-control" required placeholder="">
					</div>
				</div>
				<center><button type="submit" class="btn btn-default">Salvar</button></center>
			</form>
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