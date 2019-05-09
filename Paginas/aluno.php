<?php
//INICIO A SESSÃO
session_start();
 include("checaraluno.php"); 
 require_once 'ControllerCurso.php';
 require_once 'ControllerAluno.php';
 require_once 'Aprendizado.php';
 $curso = new Curso();
 $aluno = new Aluno();
 $aprendizado = new Aprendizado();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
  <title>Alunos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@latest/dist/sweetalert2.all.js"></script>

    <link href="Style.css" rel="stylesheet" type="text/css">
<!-- scrtip mensagem botao -->

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
      <a class="navbar-brand" href="home.php">CDC</a>
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

        <div class="jumbotron text-center jumbotron-padding">
          <h1>Fatec Jundiai</h1>
          <p>Área do aluno</p> 
        </div>

        <div class="row">
            <div class="list-group col-sm-3 text-center">
                <h3>Cursos cadastrados:</h3>
            <?php  $resultado = $aluno -> exibir_CA($_SESSION['Id']);
            $contador = 0;
                    while ($linha = mysqli_fetch_array($resultado)) {
                      
                      $cursoS = $curso->exibir_curso($linha['IdCurso']); 
                      $cursoNome = mysqli_fetch_array($cursoS);
                      if($cursoNome['Nome']!= "")  { ?>
                           
                      <a href="#" class="list-group-item"> <?php echo $cursoNome['Nome']; ?></a>
                      
                    <?php } } ?>
            
            </div>
                  

            <!-- Controle de curso do aluno -->
            <div class="col-sm-8">
                <h3 class="text-center">Dados</h3>
                <div id="services" class=" text-center">
                    <?php


                  // Colocando o Início da tabela
                  echo "<div class='table-responsive'>";
                  echo "<table class='table table-hover table-dark' >";
                  echo "</tr>";
                  echo "<td><b>Nome Curso</b></td>";
                  echo "<td><b>Quantidade de Aulas</b></td>";
                  echo "<td><b>Presença</b></td>";
                  echo "<td><b>&nbsp;</b></td>";
                  echo "<td><b>&nbsp;</b></td>";
                  echo "</tr>";
                  // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
                  $nome = $_SESSION['Id'];
                  $resultado = $aluno -> exibir_CA($_SESSION['Id']);
                  $presenca = $aprendizado ->get_presenca($_SESSION['Id']);
                  //aqui tu pegaria o objeto presenca acionaria para pegar o numero de presenca do aluno com o _SESSION['Id']
                  while ($linha = mysqli_fetch_array($resultado)) {
                  echo "<tr>";

                  echo "<td>".$linha['IdCurso']."</td>";
                  echo "<td>".$linha['QtdAula']."</td>";
                  $presenca=$aprendizado ->get_presenca($_SESSION['Id']);
                  echo "<td>".$presenca[0]."</td>";
                  //echo "<td>".$linha['Presenca']."</td>";
                  echo "<td width=50>";
                    echo "<form method=post action=PDF.php name=form3>";

                  echo "<input type=hidden name=IdCurso value=".$linha['IdCurso'].">";
                  echo "<input type=hidden name=presenca value=".$linha['Presenca'].">";
                  echo "<input type=hidden name=QtdAula value=".$linha['QtdAula'].">";

                  //Verificacao de presenca para liberacao de certificado
                  $presenca = $linha['Presenca'];
                  $QTDaula = $linha['QtdAula'];

                if ($presenca >= ($QTDaula*0.7) ){

                  echo "<button class='btn btn-primary btn-lg btn-block' type=submit name=acao value=Retirar Certificado>Retirar Certificado</button>";
                }
                  echo "</form>";
                if ($presenca < ($QTDaula*0.7)){ ?>

                  <button class="btn btn-danger btn-lg" onclick="(function(){
                    Swal.fire(
                      'Presença insuficiente!',
                      'Você nao tem presença suficiente para emitir o certificado!',
                      'error'
                )

                  })()">Retirar Certificado</button>



                <?php }



                  echo "</td>";
                  echo "</td>";
                  echo "</tr>";

                  }
                  echo "</table>";
                  echo "</div>";

                $a = $linha['presenca'];
                  mysqli_close($conexao);
                ?>
                <h2>Arquivos para download</h2>
                <table class="table table-hover text-left">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th width="1px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Material aula 1</td>
                        <td>PDF com o Conteudo abordado em aula</td>
                        <td><a><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                        <td>Material aula 2</td>
                        <td>Power point sobre a tecnologia abordada</td>
                        <td><a><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                    </tr>
                    <tr>
                        <td>Material aula 3</td>
                        <td>Atividade para entrega dia 23/02</td>
                        <td><a><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                    </tr>
                    </tbody>
                </table>
                </div>

                <footer class="container-fluid text-center">
                  <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                  </a>
                </footer>
            </div>
        </div>

<script>
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

</body>