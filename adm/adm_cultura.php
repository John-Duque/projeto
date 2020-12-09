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

    <!-- fontes das letras -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Tema CSS -->
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
                        <a href='../adm/adm_cultura.php' class='close' data-dismiss='alert'>&times</a>
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
                        <a href='../adm/adm_cultura.php' class='close' data-dismiss='alert'>&times</a>
                        Dados não foram enviados.
                    </div>
            </center>
            </div>
            ";
    }
}
    ?>



    <section id="portfolio" class="bg-light-gray">

        <!--Titulo do sarauPovo e sua informações extras -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">SarauPovo</h2>
                </div>
            </div>

            <!-- colocando as fotos do sarauPovo e suas informações junto -->
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <!-- foto 1 que sera usada, com seu caminho da pasta -->
                        <img src="../img/portfolio/roundicons.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 2 que sera usada, com seu caminho da pasta -->
                        <img src="../img/portfolio/startup-framework.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 3 que sera usada, com seu caminho da pasta -->
                        <img src="../img/portfolio/treehouse.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 4 que sera usada, com seu caminho da pasta -->
                        <img src="../img/portfolio/golden.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 5 que sera usada, com seu caminho da pasta -->
                        <img src="../img/portfolio/escape.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 6 que sera usada, com seu caminho da pasta -->
                        <img src="../img/portfolio/dreams.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Primeira foto com suas informações -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- O Primeiro Projeto do Portfolio -->
                                <form action="../listar_funcional/salvar_cultura.php?id=1" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="titulo" required placeholder="Titulo">
                                    <br><input class="form-control" name="data" required placeholder="Data" type="date"></br>
                                    <img class="img-responsive img-centered" src="../img/portfolio/roundicons-free.jpg">
                                    <br><textarea class="form-control" name="introducao" required placeholder="Introdução*" rows="10"></textarea></br>
                                    <center><input name="userfile"type="file" required class="form-control-file"></center>
                                    <br>
                                    <center><button type="submit" class="btn btn-default">Enviar</button></center></br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <form action="../listar_funcional/salvar_cultura.php?id=2" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="titulo" placeholder="Titulo">
                                    <br><input class="form-control" name="data" placeholder="Data" type="date"></br>
                                    <img class="img-responsive img-centered" src="../img/portfolio/startup-framework-preview.jpg">
                                    <br><textarea class="form-control" name="introducao" placeholder="Introdução*" rows="10"></textarea></br>
                                    <center><input name="userfile" type="file" class="form-control-file"></center>
                                    <br>
                                    <center><button type="submit" class="btn btn-default">Enviar</button></center></br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <form action="../listar_funcional/salvar_cultura.php?id=3" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="titulo" placeholder="Titulo">
                                    <br><input class="form-control" name="data" placeholder="Data" type="date"></br>
                                    <img class="img-responsive img-centered" src="../img/portfolio/treehouse-preview.jpg">
                                    <br><textarea class="form-control" name="introducao" placeholder="Introdução*" rows="10"></textarea></br>
                                    <center><input name="userfile" type="file" class="form-control-file"></center>
                                    <br>
                                    <center><button type="submit" class="btn btn-default">Enviar</button></center></br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <form action="../listar_funcional/salvar_cultura.php?id=4" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="titulo" placeholder="Titulo">
                                    <br><input class="form-control" name="data" placeholder="Data" type="date"></br>
                                    <img class="img-responsive img-centered" src="../img/portfolio/golden-preview.jpg">
                                    <br><textarea class="form-control" name="introducao" placeholder="Introdução*" rows="10"></textarea></br>
                                    <center><input name="userfile" type="file" class="form-control-file"></center>
                                    <br>
                                    <center><button type="submit" class="btn btn-default">Enviar</button></center></br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <form action="../listar_funcional/salvar_cultura.php?id=5" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="titulo" placeholder="Titulo">
                                    <br><input class="form-control" name="data" placeholder="Data" type="date"></br>
                                    <img class="img-responsive img-centered" src="../img/portfolio/escape-preview.jpg">
                                    <br><textarea class="form-control" name="introducao" placeholder="Introdução*" rows="10"></textarea></br>
                                    <center><input name="userfile" type="file" class="form-control-file"></center>
                                    <br>
                                    <center><button type="submit" class="btn btn-default">Enviar</button></center></br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <form action="../listar_funcional/salvar_cultura.php?id=6" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="titulo" placeholder="Titulo">
                                    <br><input class="form-control" name="data" placeholder="Data" type="date"></br>
                                    <img class="img-responsive img-centered" src="../img/portfolio/dreams-preview.jpg" alt="">
                                    <br><textarea class="form-control" name="introducao" placeholder="Introdução*" rows="10"></textarea></br>
                                    <center><input name="userfile" type="file" class="form-control-file"></center>
                                    <br>
                                    <center><button type="submit" class="btn btn-default">Enviar</button></center></br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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