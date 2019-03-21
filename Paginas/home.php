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
        <li>
            <a id="login" href="login.php" class="btn btn-default btn-log" role="button">Fazer Login</a>
        </li>
        <li>
            <button id="cadastro" class="btn btn-danger btn-cad" onclick="Cadastrar()">Cadastrar</button>
        </li>
        <li>
            <p id="logado" class="name-logado invisible" aria-hidden="true"> Bem vindo(a) <?php echo $_SESSION['Email']?></p>
        </li>
        <li>
            <a id="sair" href="sair.php" class="btn btn-danger btn-cad invisible" role="button">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Logo central -->

<div class="jumbotron text-center no-margin">
  <h1>Controle De Cursos</h1> 
  <p>Fatec Jundiaí</p> 
  <div class="input-group search-imput">
      <input type="text" class="form-control" placeholder="Pesquise aqui">
      <span class="input-group-btn">
      <button type="button" class="btn btn-default btn-md">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
      </button>
      </span>
  </div>
</div>




      <!-- Parte Curso border=1 bgcolor="green"-->
<div class="table-responsive">
<table class="table align"> <tr>
   <td>   
<div id="curso" class="container-fluid">
       
  <div class="row border">
    <div class="col-sm-8">
      <h2>Cursos</h2>
      <span style="font-size: 100px" class="glyphicon glyphicon-book logo slianim" ></span>
      <p>Cursos que você  </p><br>
    <button class="btn btn-dark btn-lg"><a href="curso.php">Ir para cursos</a></button>
    </div>
    <div class="col-sm-4">
      
     
    </div>
  </div>
</div>
</td>

      
      <!-- Parte aluno-->
      

 <td>
<div id="aluno" class="container-fluid">
       
  <div class="row border">
    <div class="col-sm-8">
      <h2>Alunos</h2>
      <span style="font-size: 100px" class="glyphicon glyphicon-pencil logo slianim" ></span>
      <p> Area do aluno. </p><br>
      <button class="btn btn-dark btn-lg"><a href="aluno.php">Ir para aluno</a></button>
    </div>
    <div class="col-sm-4">
      
      
    </div>
  </div>
</div>
</td>
    
      <!-- Professor parte -->
      
  <td>   
<div id="professor" class="container-fluid">
       
  <div class="row border">
    <div class="col-sm-8">
      <h2>Professores</h2>
      <span style="font-size: 100px" class="glyphicon glyphicon-book logo slianim" ></span>
      <p>Cursos que você  </p><br>
    <button class="btn btn-dark btn-lg"><a href="Professor.php">Area Professor</a></button>
    </div>
    <div class="col-sm-4">
      
     
    </div>
  </div>
</div>
</td>
</tr>
</table>
<div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
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
echo gettype($logado) ;
echo $logado;
echo $logado;
echo $logado;
?>
</body>
</html>