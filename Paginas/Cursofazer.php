<?php
require_once 'ControllerCurso.php';
  //Incluindo a conexão com banco de dados   
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    if (isset($_POST["IDcurso"]))
  {
	 $IDcurso=$_POST["IDcurso"];
  }

  /* upando a imagem */
    $nameimg = $_FILES['imagem'] ['name'];
    $_UP['pasta']= 'iconecurso/';
    $_UP ['tamanho'] = 1024 + 1024 + 100;


    move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nameimg);


    $newcurso = new Curso($_POST,$_SESSION['Nome'],$IDcurso,$nameimg);
    $nome= $newcurso -> getNome();
    $IDprofessor= $newcurso -> getIDprofessor();
    $qtdaula= $newcurso -> getQTDaula();
    $idcurso  = $newcurso -> getIDcurso();
    $descricao = $newcurso -> getDescricao();
    $datestart = $newcurso -> getdateS();
    $dateend = $newcurso -> getdateE();
   
        $acao = $newcurso -> getAcao(); 
  

}
  // Realizar as ações da tabela curso 
  switch ($acao) {

    case "Alterar":
          
         $newcurso ->alter($nome , $IDcurso, $qtdaula,$dateend, $datestart, $descricao);
         break;

    case "Excluir":
          $newcurso ->delete($IDcurso);
          break;
    case "adicionar":
          $newcurso ->add($nome , $IDprofessor, $qtdaula, $dateend, $datestart, $descricao,$nameimg);
          
         break;

    case "Cancelar":
         header("Location: Curso.php");
         break;
  }

?>