<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastro Curso</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <!-- Cadastro do curso -->

    <div class="container">
      <div class="py-5 text-center">
        <h2>Dados do Curso</h2>
        </div>
 
      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Curso</h4>
          <form name=form1 action="Cursofazer.php" METHOD="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="firstName">Nome</label>
                <input type="text" Name="Nome" class="form-control" id="Nome" placeholder="Arduino" value="" required>
                <div class="invalid-feedback">
                 Por favor colocar um Nome valido.
                </div>
              </div>	
              <div class="mb-3">
                <label for="firstName">Numero de Aulas</label>
                <input type="number" Name="QTDaula" class="form-control" id="QTDaula" min="1" value="" required>
                <div class="invalid-feedback">
                 Por favor colocar um numero valido.
                </div>
              </div>	
            <hr class="mb-4">			
            <button class="btn btn-primary btn-lg btn-block" type=submit name=acao value=Incluir>Cadastrar</button>
            <a href="professor.php" class="btn btn-danger btn-lg btn-block" role="button">Cancelar</a>
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