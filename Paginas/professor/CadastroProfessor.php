<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro Professor</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

      <!-- Cadastro do professor -->

    <div class="container">
      <div class="py-5 text-center">
        <h2>Dados do Professor</h2>
        </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Professor</h4>
          <form name=form1 action="Professorfazer.php" METHOD="post" class="needs-validation" novalidate>
          <div class="mb-3">
            
                <label for="firstName">Nome Completo:</label>
                <input type="text" Name="Nome" class="form-control" id="Nome" placeholder="José Da Silva" value="" required>
                <div class="invalid-feedback">
                 Por favor colocar um Nome valido.
                </div>
        
              <label for="Email">Email</label>
              <input type="Email" class="form-control" Name="Email" id="Email" placeholder="Email@exemplo.com">
              <div class="invalid-feedback">
                Por favor colocar um Email valido.
              </div>
              
              <label for="Email">Senha</label>
                <input type="" class="form-control" Name="Senha" id="Senha" placeholder="Número e Letras de preferencia">
                <div class="invalid-feedback">
                  Por favor colocar uma senha valida.
                  </div>
        </div>	
            <hr class="mb-4">			
            <button class="btn btn-primary btn-lg btn-block" type=submit name=acao value=Incluir>Cadastrar</button>
            <a href="../home.php" class="btn btn-danger btn-lg btn-block" role="button">Cancelar</a>
          </form>
        </div>
      </div>
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