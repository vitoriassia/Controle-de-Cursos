<?php
//INICIO A SESSÃO
session_start();
 include("checarprofessor.php"); 
 require_once 'consultaBanco.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
  <title>Professores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #000000;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #000000;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #000000;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #000000;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #FFFFFF;
  }
  .logo-small {
      color: #f41f1f;
      font-size: 50px;
  }
  .logo {
      color: #e60000;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f41f1f;
  }
  .carousel-indicators li {
      border-color: #f41f1f;
  }
  .carousel-indicators li.active {
      background-color: #f41f1f;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f41f1f; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f41f1f;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #B22222 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f41f1f;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #404040;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #000000 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #000000;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
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
        <li><a href="curso.php">Curso</a></li>
        <li><a href="aluno.php">Aluno</a></li>
        <li><a href="professor.php">Professor</a></li>
		<li><a href="sair.php">Sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Logo central -->

<div class="jumbotron text-center">
  <h1>Fatec Jundiai</h1> 
  <p>Controle de cursos</p> 
</div>

<!-- Controle e cadastro de curso (Professor) -->

<div id="services" class="container-fluid text-center">
  <h2>Controle e cadastro de cursos</h2>
  <br>
  <div class="row slideanim">
  <?php
  include("conexao/conexao.php");

  // Cadastro de cursos
  
  // Colocando o Início da tabela

  echo "<table class='table table-hover table-dark' >";
  echo "<td><b>IDcurso</b></td>";
  echo "<td><b>IDprofessor</b></td>";
  echo "<td><b>Nome</b></td>";
  echo "<td><b>Quantidade de Aulas</b></td>";
  echo "<td><b>&nbsp;</b></td>";
  echo "<td><b>&nbsp;</b></td>";
  echo "</tr>";
  // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
  $resultado = get_todosCursos();
  while ($linha = mysqli_fetch_array($resultado)) {
   echo "<tr>";
   echo "<td>".$linha['IDcurso']."</td>";
   echo "<td>".$linha['IDprofessor']."</td>";
   echo "<td>".$linha['Nome']."</td>";
   echo "<td>".$linha['QTDaula']."</td>";   
   echo "<td width=50>";
   echo "<form method=post action=Cursoaltera.php name=form2>";
   echo "<input type=hidden name=IDcurso value=".$linha['IDcurso'].">";
   echo "<input type=submit class=btn btn-info value=Alterar>";
   echo "</form>";
   echo "</td>";
   echo "<td width=50>";
   echo "<form method=post action=Cursoexclui.php name=form3>";
   echo "<input type=hidden name=IDcurso value=".$linha['IDcurso'].">";
   echo "<input type=hidden name=IDprofessor value=".$linha['IDprofessor'].">";
   echo "<input type=hidden name=Nome value=".$linha['Nome'].">";
   echo "<input type=hidden name=QTDaula value=".$linha['QTDaula'].">";  
   echo "<input type=submit class=btn btn-info value=Excluir>";
   echo "</form>";
   echo "</tr>";
    
  }
  echo "<tr>";
  echo "<td colspan=5>";
  echo "<form method=post action=Cursoinclui.php name=form3>";
  echo "<input type=submit class=btn btn-info value=Incluir>";
  echo "</form>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  mysqli_close($conexao);
?>
</div>

<!-- Area para fazer chamada -->

<div id="services" class="container-fluid text-center">
  <h2>Alunos cadastrados:</h2>
  <br>
    <?php
  include("conexao/conexao.php");
  $nome = $_SESSION['Nome'];
  $query1 = "SELECT curso.Nome FROM curso WHERE curso.IDprofessor = '$nome' ";
  $resultado1 = mysqli_query($conexao,$query1);
  while ($linha1 = mysqli_fetch_array($resultado1)) {
  $curso = $linha1['Nome'];
  // Colocando o Início da tabela
  echo '<div id="accordion">
  <div class="card">
        <div class="card-header" id="1">
            <h5 class="mb-0">
            <button class="btn btn-info btn-lg btn-block" data-toggle="collapse" data-target="#'.$curso.'" aria-expanded="true" aria-controls="collapseOne">
               '.$curso.'
            </button>
            </h5>
        </div>';
  echo '<div id="'.$curso.'" class="collapse " aria-labelledby="1" data-parent="#accordion">
  <div class="card-body">';
  echo "<table class='table table-hover table-dark' >";
  echo "</tr>";
   echo "<td><b>Aluno</b></td>";
  echo "<td><b>Presença</b></td>";
  echo "<td><b>Presente</b></td>";
  echo "</tr>";
  // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML 
  $nome = $_SESSION['Nome'];
  $query = "SELECT DISTINCT aprendizado.IDaluno , aprendizado.presenca ,aprendizado.IDcurso FROM aprendizado INNER JOIN curso ON aprendizado.IDcurso = curso.Nome INNER JOIN professor ON curso.IDprofessor = '$nome' WHERE aprendizado.IDcurso = '$curso'";
  $resultado = mysqli_query($conexao,$query);
  while ($linha = mysqli_fetch_array($resultado)) {
   echo "<tr>";
   echo "<td>".$linha['IDaluno']."</td>";
   echo "<td>".$linha['presenca']."</td>";
   echo "<td width=50>";  
   echo "<form method=post action=Aprendizadofazer.php name=form3>";   
   echo "<input type=hidden name=Nome value=".$linha['IDaluno'].">";
   echo "<input type=hidden name=presenca value=".$linha['presenca'].">";
   echo "<input type=hidden name=IDcurso value=".$linha['IDcurso'].">";
   echo "<input type=checkbox class=form-control name=presente[] value=".$linha['IDaluno'].">";
   echo "</td>";
   echo "</tr>";
    
  }
  echo "</table>";
  echo '<button class="btn btn-primary" type=submit name=acao value=Presença>Confirmar</button>';
  echo '</div>
</div>';
  echo "</div>";
  echo "</form>";
  }

$a = $linha['presenca'];
  mysqli_close($conexao);
?>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>
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