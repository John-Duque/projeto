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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TCC</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../css/agency.min.css" rel="stylesheet">
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bem Vindo !</div>
            </div>
        </div>
    </header>

    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];

        if ($msg == 1) {
            echo"

            <center>
                <div class='message'>
                    <div class='alert alert-success' role='alert'>
                        <a href='../adm/adm_alertas.php' class='close' data-dismiss='alert'>&times</a>
                        Dados enviados com sucesso.
                    </div>
            </center>
            </div>
            ";
    }else if($msg == 2){
            echo"
            <center>
                <div class='message'>
                    <div class='alert alert-danger' role='alert'>
                        <a href='../adm/adm_alertas.php' class='close' data-dismiss='alert'>&times</a>
                        Dados não foram enviados.
                    </div>
            </center>
            </div>
            ";
    }
}
?>
        <!-- Services Section 
		Alertas e informações que deveram ser passadas -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Alertas</h2>
                        <h3 class="section-subheading text-muted">Informações dos horarios</h3>
                    </div>
                    <form action="../listar_funcional/salvar_alertas.php" method="POST" enctype="multipart/form-data">
                        <div class="form-check">
                            <center>
                                <input type="hidden" name='manha' value="0">
                                <label><input type="checkbox" name='manha' value="1">Manhã</label>

                                <input type="hidden" name='tarde' value="0">
                                <label><input type="checkbox" name='tarde' value="1">Tarde</label>

                                <input type="hidden" name='noite' value="0">
                                <label><input type="checkbox" name='noite' value="1">Noite</label>
                            </center>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name='noticia' required id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-default">Enviar</button></center>
                        </div>
                    </form>
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