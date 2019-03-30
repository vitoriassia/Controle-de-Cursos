<?php
//INICIO A SESSÃO
session_start();
 include("checar.php");
 require_once 'ControllerCurso.php';
 require_once 'ControllerProfessor.php';
 $professor = new Professor();
 $curso = new Curso(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
    <title>Cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="Style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Menu -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand CDC-link-home" href="home.php">CDC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="menu-white" href="curso.php">Curso</a></li>
        <li><a class="menu-white" href="aluno.php">Aluno</a></li>
        <li><a class="menu-white" href="professor.php">Professor</a></li>
		<li><a class="menu-white" href="sair.php">Sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Logo central -->

<div class="jumbotron text-center">
  <h1>Fatec Jundiai</h1> 
  <p>Controle de cursos</p> 
</div>


    <!-- Mostra cursos existentes e se a pessoa esta ou nao cadastrada nos cursos -->

    <div id="services" class="container-fluid text-center">
      <h2>Cursos Disponiveis:</h2>
      <br>
      <div class="row slideanim">
      <?php
      
      include("conexao/conexao.php");

      // Colocando o Início da tabela

      echo "<table class='table table-hover table-dark' >";
      echo "<td><b>Nome do curso</b></td>";
      echo "<td><b>Data</b></td>";
      echo "<td><b>Ministrador Curso</b></td>";
      echo "<td><b>&nbsp;</b></td>";
      echo "<td><b>&nbsp;</b></td>";
      echo "<td><b>&nbsp;</b></td>";
      echo "</tr>";
      // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
       $resultadoc = $curso -> exibir_cursos();

      $nome =  $_SESSION['Id'];
      while ($linha = mysqli_fetch_array($resultadoc)) {
       echo "<tr>";
       echo "<td>".$linha['Nome']."</td>";
       echo "<td>".$linha['DateStart']."/".$linha['DateEnd']."</td>";
       $nomep=$professor->get_professor($linha['IdProfessor']);
       echo "<td>".$nomep['Nome']."</td>";
       echo "<td width=50>";
       echo "</td>";
       echo "<td width=50>";
       echo "<form method=post action=Aprendizadofazer.php name=acao id=acao value=Inscrever>";
       echo "<input type=hidden name=IdCurso value=".$linha['IdCurso'].">";
       echo "<input type=hidden name=IdProfessor value=".$linha['IdProfessor'].">";
       echo "<input type=hidden name=Nome value=".$linha['Nome'].">";
          echo "<input type=hidden name=acao value=Inscrever>";
       $curso = $linha['IdCurso'];
       $cadastro = " SELECT DISTINCT A.* 
                        FROM aprendizado A
                        LEFT JOIN curso C ON A.IdCurso = C.Nome
                        where A.IdAluno like '$nome' And C.IdCurso = $curso ";
       $resultadoCadastro = mysqli_query($conexao,$cadastro);
    if (mysqli_fetch_array($resultadoCadastro) == null) {
        echo '<button class="btn btn-primary btn-lg" onclick="Inscrever()">Inscrever</button>';
        echo "</form>";
    }else{
        echo "</form>";
        echo '<button class="btn btn-warning btn-lg" onclick="Cadastrado()">Cadastrado</button>';
    }




       echo "</td>";
       echo "<tr>";
      }
      echo "</tr>";
      echo "</table>";


      mysqli_close($conexao);
    ?>
    </div>

    <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        <!-- scrtip mensagem botao -->
            function Cadastrado()
            {
                swal(
                    'Ja Cadastrado!',
                    'Você ja é cadastrado nesse curso!',
                    'warning'
                )
            }

        <!-- scrtip mensagem botao -->
        function Inscrever()
        {
            swal({
                title: "Cadastrado com Sucesso!",
                text: "Parabens voce acaba de se increver em um novo curso!",
                icon: "warning",
                button: "Aww yiss!",
                closeOnClickOutside: false,
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

    </div>

</body>
</html>