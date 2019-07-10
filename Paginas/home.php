<?php
//INICIO A SESSÃO
session_start();
//Recebendo a variavel de logado
$logado = $_SESSION["logado"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Icone -->
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="Style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Menu -->

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand CDC-link-home" href="home.php">CDC</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="menu-white" href="curso/curso.php">Curso</a>
                </li>
                <li>
                    <a class="menu-white" href="aluno/aluno.php">Aluno</a>
                </li>
               <!-- <li>
                    <a class="menu-white" href="professor/professor.php">Professor</a>
                </li> -->
                <li>
                    <a id="login" href="login.php" class="btn btn-default btn-log" role="button">Fazer Login</a>
                </li>
                <li>
                    <button id="cadastro" class="btn btn-danger btn-cad" onclick="Cadastrar()">Cadastrar</button>
                </li>
                <li>
                    <a id="sair" href="sair.php" class="btn btn-danger btn-cad invisible" role="button">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Logo central -->

<div id="#myPage" class="jumbotron text-center no-margin jumbotron-padding">
    <h1>Controle De Cursos</h1>
    <p>Fatec Jundiaí</p>
    <p id="logado" class="name-logado invisible" aria-hidden="true"> Bem vindo(a) <?php echo $_SESSION['Email']?>
</div>

    <div class="container marketing">
        <h1 class="align">O que deseja Fazer ?  </h1>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="./imagens/piton.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Criar seu proprio Curso</h2>
                <p>Seja parte da da faculdade e faça seu proprio curso</p>
                <p><a class="btn btn-secondary" href="#" role="button">Crie agora</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="./imagens/bg.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Veja o curso em destaque</h2>
                <p>Aprenda A fazer cursos nessa incrivel plataforma chamada controle de cursos, corra antes que acabe as incrições</p>
                <p><a class="btn btn-secondary" href="#" role="button">Confira agora mesmo</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="./imagens/full.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Ver meus cursos</h2>
                <p>Acompanhe seus cursos, veja o material da aula, retire seu certificado e muito mais</p>
                <p><a class="btn btn-secondary" href="#" role="button">Meu Perfil</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
<div>
    <div class="album py-5 bg-light">
        <div class="container">
            <h1 class="align">Confira também</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/piton.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/piton.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/android.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/tizada.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/tablet.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/node.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/arduino.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/html.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/1755476_2755_3.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="./imagens/bg.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="./imagens/bg.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#" role="button">Cadastra-se</a>
                                </div>
                                <small class="text-muted">Notas:</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="Voltar ao topo">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

</div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function Cadastrar() {
        swal("Você deseja se tornar um aluno ou um professor?", {
            buttons: {
                cancel: "Cancelar",
                roll: {
                    text: "Professor",
                    value: "Professor",
                },
                Aluno: {
                    text: "Aluno",
                    value: "Aluno",
                },

            },
            icon: "info",
        })
            .then((value) => {
                switch (value) {

                    case "Aluno":
                        window.location.href = "CadastroAluno.php";
                        break;

                    case "Professor":
                        window.location.href = "CadastroProfessor.php";
                        break;

                    default:
                        break;
                }
            });
    }
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })


</script>
<?php
if($logado){
    echo "<script>
        document.getElementById(\"login\").style.display = \"none\" ;
        document.getElementById(\"cadastro\").style.display = \"none\" ;
        document.getElementById(\"logado\").classList.remove(\"invisible\");
        document.getElementById(\"sair\").classList.remove(\"invisible\");
        </script>" ;

}
?>
</body>
</html>