<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login Safado</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>


<?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];

        switch ($msg) {
            case 1:
                ?>
                <center>
                    <div class="message">
                        <div class="alert alert-danger" role="alert">
                            <a href="../Login/login.php" class="close" data-dismiss="alert">&times</a>
                            Email ou senha Invalidos.
                        </div>
                </center>
                </div>
        <?php
                break;
        }
    }
    ?>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/img-01.jpg');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form class="login100-form validate-form" action="../listar_funcional/salvar_login.php"  method="post" enctype="multipart/form-data">
                    <div class="login100-form-avatar">
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Digite seu nome">
                        <input class="input100" type="text" name="nome" placeholder="Nome">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Digite sua senha">
                        <input class="input100" type="password"  name="senha" placeholder="Senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn">
							Login
						</button>
                    </div>

                    <!--<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>-->

					<br><div class="text-center w-full"></br>
						<a class="txt1" href="../adm/cadastro_funcionario.php">
							Cadastre-se
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
                </form>
            </div>
        </div>
    </div>





    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>