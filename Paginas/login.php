<?php
//INICIO A SESSÃO
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina de Login</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body style="background-image:URL(imagens/bg.jpg); background-repeat: no-repeat;">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                    <!-- Login -->

                <div class="login-panel panel panel-default" style="margin-top:50%;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Entrar</h3>
                    </div>
					<center>
                    <div class="panel-body">
                        <form action="validalogin.php" method="post" id="form" name="form" >
                            <fieldset>
                                <div class="mb-3">
                                    <label for="Nome">Nome 
									<br><input type="text" name="Nome" id="Nome" /></label>
                                </div>
                                <div class="mb-3">
                                    <label for="RA">Senha
									<br><input type="password" name="RA" id="RA" /></label>
                                </div><br>
								<button type="submit" class="btn btn-lg btn-success btn-block">ENTRAR</button>
                                <?php
                                echo $_SESSION["erro"];
                                ?>
								<hr class="mb-4">	

                                <!-- Criação de conta -->

								<h4 class="panel-title">Criar uma conta?</h4><br>
                                <a href="CadastroAluno.php" class="btn btn-info" role="button">Aluno</a>
                                <a href="CadastroProfessor.php" class="btn btn-info" role="button">Professor</a>

								
                            </fieldset>
                        </form>
                    </div>
					</center>
            </div>
        </div>
    </div>


    <script src="../vendor/jquery/jquery.min.js"></script>

    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
