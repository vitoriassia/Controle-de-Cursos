<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagina de Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
                        Entrar como
                </span>
                <div class="choice-container">
                    <span id="professorChoice" onclick="LoginChoice('professorChoice')" class="login100-form-logo choice-button">
                       <span>
                           Professor
                       </span>
                    </span>
                    <span class="text-span">Ou</span>
                    <span id="alunoChoice" onclick="LoginChoice('alunoChoice')" class="login100-form-logo choice-button">
                       <span>
                           Aluno
                       </span>
                    </span>
                </div>
                <!-- Professor -->
                <div style="display: none" id="EmailProfessor" class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" placeholder="Professor digite seu email" type="text" name="EmailProfessor" id="EmailProfessor" />
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                <div style="display: none" id="SenhaProfessor" class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" placeholder="Senha" type="password" name="SenhaProfessor" id="SenhaProfessor" />
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <!-- Aluno -->
                <div id="EmailAluno" class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" placeholder="Aluno digite seu email" type="text" name="EmailAluno" id="EmailAluno" />
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                <div id="SenhaAluno" class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" placeholder="Senha" type="password" name="SenhaAluno" id="SenhaAluno" />
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
                        <a style="text-decoration: none" href="aluno/CadastroAluno.php">
                            Aluno
                        </a>
                    </button>
                    <button style="margin-right: 15px" class="login100-form-profal ">
                        <a style="text-decoration: none" href="professor/CadastroProfessor.php">
                            Professor
                        </a>
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>

<script>
    function LoginChoice(choice){
        if(document.getElementById(choice).id === "professorChoice"){
            document.getElementById("EmailProfessor").style.display = "block";
            document.getElementById("SenhaProfessor").style.display = "block";
            document.getElementById("EmailAluno").style.display = "none";
            document.getElementById("SenhaAluno").style.display = "none";
        }else{
            document.getElementById("EmailProfessor").style.display = "none";
            document.getElementById("SenhaProfessor").style.display = "none";
            document.getElementById("EmailAluno").style.display = "block";
            document.getElementById("SenhaAluno").style.display = "block";
        }
    }
</script>

<div id="dropDownSelect1"></div>

</body>
</html>