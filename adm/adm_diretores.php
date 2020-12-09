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
        </div>
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
                        <a href='../adm/adm_diretores.php' class='close' data-dismiss='alert'>&times</a>
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
                        <a href='../adm/adm_diretores.php' class='close' data-dismiss='alert'>&times</a>
                        Dados não foram enviados.
                    </div>
            </center>
            </div>
            ";
    }
}
    ?>


<!-- Parte dos professores -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Professores</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <form action="../listar_funcional/salvar_diretores.php?id=1" method="post" enctype="multipart/form-data">
                            <img src="../img/team/1.jpg" class="img-responsive img-circle" alt="">
                            <input class="form-control" name="nome" required  placeholder="Nome Completo*">
                            <input class="form-control" name="cargo" required placeholder="Cargo*">
                            <br><center><input type="file" name="userfile" class="form-control-file" required ></center></br>
                            <center><button type="submit" class="btn btn-default">Salvar</button></center>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <form action="../listar_funcional/salvar_diretores.php?id=2" method="post" enctype="multipart/form-data">
                            <img src="../img/team/2.jpg" class="img-responsive img-circle" alt="">
                            <input class="form-control" name="nome" required placeholder="Nome*">
                            <input class="form-control" name="cargo" required placeholder="Cargo*">
                            <br><center><input type="file" name="userfile" class="form-control-file"  required ></center></br>
                            <center><button type="submit" class="btn btn-default">Salvar</button></center>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <form action="../listar_funcional/salvar_diretores.php?id=3" method="post" enctype="multipart/form-data">
                            <img src="../img/team/3.jpg" class="img-responsive img-circle" alt="">
                            <input class="form-control" name="nome" required placeholder="Nome*">
                            <input class="form-control" name="cargo" required placeholder="Cargo*">
                            <br><center><input type="file" name="userfile" class="form-control-file" required></center></br>
                            <center><button type="submit" class="btn btn-default">Salvar</button></center>
                        </form>
                    </div>
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
