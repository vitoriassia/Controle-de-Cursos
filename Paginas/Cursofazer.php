<?php
require_once 'ControllerCurso.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IdCurso"]))
  {
	 $idcurso= $_POST["IdCurso"];  }
  
    $acao = $_POST["acao"];

    
    $curso = new Curso();
  // Realizar as ações da tabela curso 
  switch ($acao) {

    case "Alterar":
        $curso->nome = $_POST['Nome'];
          $curso->qtd = $_POST ['QtdAula'];
          $curso->descricao = $_POST['Descricao'];
          $curso->dateStart = $_POST['DateStart'];
          $curso->dateEnd = $_POST['DateEnd'];
          $curso->idprofessor = $_SESSION['Id'];
          $newcurso->alter_curso($_POST,$_SESSION['Nome']);
            break;

    case "Excluir":
          $newcurso -> delete_curso($IdCurso);
            break;
    case "adicionar":
          $curso->nome = $_POST['Nome'];
          $curso->qtd = $_POST ['QtdAula'];
          $curso->descricao = $_POST['Descricao'];
          $curso->dateStart = $_POST['DateStart'];
          $curso->dateEnd = $_POST['DateEnd'];
          $curso->idprofessor = $_SESSION['Id'];
          $curso->add_curso();
            break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  
  }
}
?>  