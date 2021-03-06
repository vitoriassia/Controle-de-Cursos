<?php
  /* Recebimento das variaveis */
  $RA=$_POST['RA'];
  $CursoFaculdade=$_POST['CursoFaculdade'];
  $Nome=$_POST['Nome'];
  $Email=$_POST['Email'];
  $Presenca=$_POST['Presenca'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastro Aluno</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Dados do Aluno</h2>
        </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Aluno</h4>
          <form name=form1 action="Alunofazer.php" METHOD="post" class="needs-validation" novalidate>
			<div class="mb-3">
              <label for="address">RA</label>
              <?php
			   echo "<input type=text name=RA class=form-control value=".$RA." readonly><br>";
			   ?>
              <div class="invalid-feedback">
               Por favor colocar um RA valido.
              </div>
            </div>
			<div class="mb-3">
              <label for="address">CursoFaculdade</label>
              <?php
			   echo "<input type=text name=CursoFaculdade class=form-control value=".$CursoFaculdade."><br>";
			   ?>
              <div class="invalid-feedback">
               Por favor colocar um CursoFaculdade valido.
              </div>
            </div>
              <div class="mb-3">
                <label for="firstName">Nome</label>
                <?php
			   echo "<input type=text name=Nome class=form-control value=".$Nome."><br>";
			   ?>
                <div class="invalid-feedback">
                 Por favor colocar um Nome valido.
                </div>
              </div>
            <div class="mb-3">
              <label for="Email">Email</label>
              <?php
			   echo "<input type=text name=Email class=form-control value=".$Email."><br>";
			   ?>
              <div class="invalid-feedback">
                Por favor colocar um Email valido.
              </div>
            </div>            
			<div class="mb-3">
              <label for="address">Presenca</label>
			  <?php
			   echo "<input type=text name=Presenca class=form-control value=".$Presenca."><br>";
			   ?>
              <div class="invalid-feedback">
               Por favor colocar um Presenca valido.
              </div>
            </div>			
            <hr class="mb-4">			
            <button class="btn btn-primary btn-lg btn-block" type=submit name=acao value=Alterar>Alterar</button>
			<button class="btn btn-primary btn-lg btn-block" type=submit name=acao value=Cancelar>Cancelar</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Pedro/Sandro</p>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');

          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>