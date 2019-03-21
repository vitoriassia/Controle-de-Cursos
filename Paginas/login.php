<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagina de Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('imagens/bg.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form"action="validalogin.php" method="post" id="form" name="form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-graduation-cap"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Entrar
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" placeholder="Email" type="text" name="Email" id="Email" />
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" placeholder="Senha" type="password" name="Senha" id="Senha" />
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Entrar
                    </button>
                </div>
                <br>
                <hr>

                <span class="login100-creation p-b-34 p-t-27">
						Criar uma conta?
					</span>

                <div class="container-login100-form-btn">
                    <button style="margin-right: 15px" class="login100-form-profal ">
                        <a style="text-decoration: none" href="CadastroAluno.php">
                            Aluno
                        </a>
                    </button>
                    <button style="margin-right: 15px" class="login100-form-profal ">
                        <a style="text-decoration: none" href="CadastroProfessor.php">
                            Professor
                        </a>
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>