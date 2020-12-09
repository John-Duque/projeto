<?php
include 'listar_funcional/conectar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TCC</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte das letras -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Tema CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

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
                        <a class="page-scroll" href="#services">Alertas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Cultura</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Diretores</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
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
                <a href="#services" class="page-scroll btn btn-xl">Saiba Mais</a>
            </div>
        </div>
    </header>

    <!-- Services Section 
		Alertas e informações que deveram ser passadas -->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Alertas</h2>
                    <h3 class="section-subheading text-muted">Informações dos horarios</h3>
                </div>
            </div>

            <!-- Selecionar noticias -->

            <?php
            // Noticias da manha
            $dados = $sql->query("SELECT noticia.id_noticia AS 'id',
                        noticia AS 'noticia',
                        noticia.data AS 'data'
                        FROM   noticia INNER JOIN periodo ON(noticia.id_noticia = periodo.id_noticia)
                        WHERE periodo.manha = 1
                        ORDER BY noticia.id_noticia DESC
                        LIMIT 1;");

            while ($alertas = mysqli_fetch_array($dados)) {
                $manha = $alertas['noticia'];
                $data = $alertas['data'];
            }

            // Noticias da Tarde
            $dados = $sql->query("SELECT noticia, 
            noticia.id_noticia,
            noticia.data
            FROM   noticia INNER JOIN periodo ON(noticia.id_noticia = periodo.id_noticia)
            WHERE periodo.tarde = 1
            ORDER BY noticia.id_noticia DESC
            LIMIT 1;");

            while ($alertas = mysqli_fetch_array($dados)) {
                $tarde = $alertas['noticia'];
                $data = $alertas['data'];
            }
            // Noticias da Noite
            $dados = $sql->query("SELECT noticia, 
            noticia.id_noticia,
            noticia.data
            FROM   noticia INNER JOIN periodo ON(noticia.id_noticia = periodo.id_noticia)
            WHERE periodo.noite = 1
            ORDER BY noticia.id_noticia DESC
            LIMIT 1;");

            while ($alertas = mysqli_fetch_array($dados)) {
                $noite = $alertas['noticia'];
                $data = $alertas['data'];
            }
            ?>
            <div class="row text-center">
                <div class="col-md-4">
                    <h4 class="service-heading">Manhã</h4>
                    <p class="text-muted"><?php echo $manha; ?></p>
                </div>
                <div class="col-md-4">
                    <h4 class="service-heading">Tarde</h4>
                    <p class="text-muted"><?php echo $tarde; ?></p>
                </div>
                <div class="col-md-4">
                    <h4 class="service-heading">Noite</h4>
                    <p class="text-muted"><?php echo $noite; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- parte 1-->
    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 1;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }

    ?>
    <section id="portfolio" class="bg-light-gray">

        <!--Titulo do sarauPovo e sua informações extras -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cultura</h2>
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
                        <img src=<?php echo $foto; ?> class="img-responsive" alt="">
                    </a>

                    <!-- Titulo e sub Titulo das fotos -->
                    <div class="portfolio-caption">
                        <h4><?php echo $titulo; ?></h4>
                        <p class="text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                    </div>
                </div>

                <!-- parte 2-->
                <?php
                $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 2;");

                while ($cultura = mysqli_fetch_array($dados)) {
                    $titulo = $cultura['titulo'];
                    $data = $cultura['data'];
                    $introducao = $cultura['introducao'];
                    $foto = $cultura['foto'];
                }
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 2 que sera usada, com seu caminho da pasta -->

                        <img src=<?php echo $foto; ?> class="img-responsive" alt="">
                    </a>

                    <!-- Titulo e sub Titulo das fotos -->
                    <div class="portfolio-caption">
                        <h4><?php echo $titulo; ?></h4>
                        <p class="text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                    </div>
                </div>

                <?php
                $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 3;");

                while ($cultura = mysqli_fetch_array($dados)) {
                    $titulo = $cultura['titulo'];
                    $data = $cultura['data'];
                    $introducao = $cultura['introducao'];
                    $foto = $cultura['foto'];
                }
                ?>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 3 que sera usada, com seu caminho da pasta -->

                        <img src=<?php echo $foto; ?> class="img-responsive" width="255px" height="150px" alt="">
                    </a>

                    <!-- Titulo e sub Titulo das fotos -->

                    <div class="portfolio-caption">
                        <h4><?php echo $titulo; ?></h4>
                        <p class="text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                    </div>
                </div>

                <?php

                $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 4;");

                while ($cultura = mysqli_fetch_array($dados)) {
                    $titulo = $cultura['titulo'];
                    $data = $cultura['data'];
                    $introducao = $cultura['introducao'];
                    $foto = $cultura['foto'];
                }
                ?>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 4 que sera usada, com seu caminho da pasta -->

                        <img src=<?php echo $foto; ?> class="img-responsive" alt="">
                    </a>

                    <!-- Titulo e sub Titulo das fotos -->

                    <div class="portfolio-caption">
                        <h4><?php echo $titulo; ?></h4>
                        <p class="text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                    </div>
                </div>


                <?php

                $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 5;");

                while ($cultura = mysqli_fetch_array($dados)) {
                    $titulo = $cultura['titulo'];
                    $data = $cultura['data'];
                    $introducao = $cultura['introducao'];
                    $foto = $cultura['foto'];
                }
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 5 que sera usada, com seu caminho da pasta -->

                        <img src=<?php echo $foto; ?> class="img-responsive" alt="">
                    </a>

                    <!-- Titulo e sub Titulo das fotos -->

                    <div class="portfolio-caption">
                        <h4><?php echo $titulo; ?></h4>
                        <p class="text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                    </div>
                </div>

                <?php

                $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 6;");

                while ($cultura = mysqli_fetch_array($dados)) {
                    $titulo = $cultura['titulo'];
                    $data = $cultura['data'];
                    $introducao = $cultura['introducao'];
                    $foto = $cultura['foto'];
                }
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        <!-- foto 6 que sera usada, com seu caminho da pasta -->

                        <img src=<?php echo $foto; ?> class="img-responsive" alt="">
                    </a>

                    <!-- Titulo e sub Titulo das fotos -->

                    <div class="portfolio-caption">
                        <h4><?php echo $titulo; ?></h4>
                        <p class="text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 1;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

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
                                <h2><?php echo $titulo; ?></h2>
                                <p class="item-intro text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                                <img class="img-responsive img-centered" src=<?php echo $foto; ?> alt="">
                                <p class="text-muted"><?php echo $introducao; ?></p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Feche</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 2;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

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
                                <h2><?php echo $titulo; ?></h2>
                                <p class="item-intro text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                                <img class="img-responsive img-centered" src=<?php echo $foto; ?> alt="">
                                <p class="text-muted"><?php echo $introducao; ?></p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Feche</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 3;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

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
                                <!-- Projeto e Detalhes do portfolio na Parte de dentro sarauPovo -->
                                <h2><?php echo $titulo; ?></h2>
                                <p class="item-intro text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                                <img class="img-responsive img-centered" src="<?php echo $foto; ?>" alt="">
                                <p class="text-muted"><?php echo $introducao; ?></p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Feche</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 4;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

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
                                <!-- Detalhes do projeto -->
                                <h2><?php echo $titulo; ?></h2>
                                <p class="item-intro text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                                <img class="img-responsive img-centered" src="<?php echo $foto; ?>" alt="">
                                <p class="text-muted"><?php echo $introducao; ?></p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Feche</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 5;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

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
                                <!-- Detalhes do projeto -->
                                <h2><?php echo $titulo; ?></h2>
                                <p class="item-intro text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                                <img class="img-responsive img-centered" src=<?php echo $foto; ?> alt="">
                                <p class="text-muted"><?php echo $introducao; ?></p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Feche</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 6;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

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
                                <!-- Detalhes do projeto-->
                                <h2><?php echo $titulo; ?></h2>
                                <p class="item-intro text-muted"><?php echo date('d-m-Y', strtotime($data)); ?></p>
                                <img class="img-responsive img-centered" src=<?php echo $foto; ?> alt="">
                                <p class="text-muted"><?php echo $introducao; ?></p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Feche</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sobre a escola</h2>
                </div>
            </div>

    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 7;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src=<?php echo $foto; ?> alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $titulo; ?></h4>
                                    <h4 class="subheading"><?php echo date('d-m-Y', strtotime($data)); ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $introducao; ?></p>
                                </div>
                            </div>
                        </li>
                        
    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 8;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <!--link da segunda foto que será usada falando sobre a escola-->
                                <img class="img-circle img-responsive" src=<?php echo $foto; ?> alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $titulo; ?></h4>
                                    <h4 class="subheading"><?php echo date('d-m-Y', strtotime($data)); ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $introducao; ?></p>
                                </div>
                            </div>
                        </li>
                        <li>

    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 9;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>
                            <div class="timeline-image">
                                <!--link da terceira foto que será usada falando sobre a escola-->
                                <img class="img-circle img-responsive" src=<?php echo $foto; ?> alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $titulo; ?></h4>
                                    <h4 class="subheading"><?php echo date('d-m-Y', strtotime($data)); ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $introducao; ?></p>
                                </div>
                            </div>
                        </li>

    <?php
    $dados = $sql->query("SELECT * FROM cultura WHERE cultura.id_cultura = 10;");

    while ($cultura = mysqli_fetch_array($dados)) {
        $titulo = $cultura['titulo'];
        $data = $cultura['data'];
        $introducao = $cultura['introducao'];
        $foto = $cultura['foto'];
    }


    ?>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <!--link da quarta foto que será usada falando sobre a escola-->
                                <img class="img-circle img-responsive" src=<?php echo $foto; ?> alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $titulo; ?></h4>
                                    <h4 class="subheading"><?php echo date('d-m-Y', strtotime($data)); ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $introducao; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Seja Parte
                                    <br>Da Nossa
                                    <br>Historia Tambem!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Parte dos diretores -->
    <?php
    $dados = $sql->query("SELECT * FROM direcao WHERE direcao.id_direcao = 1;");

    while ($direcao = mysqli_fetch_array($dados)){
        $nome = $direcao['nome'];
        $cargo = $direcao['cargo'];
        $foto = $direcao['foto'];
    }

    ?>

    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Diretores</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <!--link da foto do diretor 1 -->
                        <img src=<?php echo $foto;?> class="img-responsive img-circle" alt="">
                        <h4><?php echo $nome; ?></h4>
                        <p class="text-muted"><?php echo $cargo; ?></p>
                        <ul class="list-inline social-buttons">
                           <!-- <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>-->
                        </ul>
                    </div>
                </div>
    <?php
    $dados = $sql->query("SELECT * FROM direcao WHERE direcao.id_direcao = 2;");

    while ($direcao = mysqli_fetch_array($dados)){
        $nome = $direcao['nome'];
        $cargo = $direcao['cargo'];
        $foto = $direcao['foto'];
    }

    ?>
                <div class="col-sm-4">
                    <div class="team-member">
                        <!--link da foto do diretor 2 -->
                        <img src=<?php echo $foto;?> class="img-responsive img-circle" alt="">
                        <h4><?php echo $nome; ?></h4>
                        <p class="text-muted"><?php echo $cargo; ?></p>
                        <ul class="list-inline social-buttons">
                           <!-- <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>-->
                        </ul>
                    </div>
                </div>
    <?php
    $dados = $sql->query("SELECT * FROM direcao WHERE direcao.id_direcao = 3;");

    while ($direcao = mysqli_fetch_array($dados)){
        $nome = $direcao['nome'];
        $cargo = $direcao['cargo'];
        $foto = $direcao['foto'];
    }

    ?>
                
                <div class="col-sm-4">
                    <div class="team-member">
                        <!--link da foto do diretor 3 -->
                        <img src=<?php echo $foto;?> class="img-responsive img-circle" alt="">
                        <h4><?php echo $nome; ?></h4>
                        <p class="text-muted"><?php echo $cargo
                        ; ?></p>
                        <ul class="list-inline social-buttons">
                            <!--<li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Entre Em Contato</h2>
                    <h3 class="section-subheading text-muted">Digite Seus Dados Abaixo</h3>
                </div>
            </div>
            <div class="row">
                <form action="listar_funcional/salvar_forum.php" method="POST" enctype="multipart/form-data">            
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo*" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="telefone" placeholder="Telefone*" id="phone" required >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="mensagem" placeholder="Mensagem*" id="message" required></textarea>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>    
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
</body>
</html>