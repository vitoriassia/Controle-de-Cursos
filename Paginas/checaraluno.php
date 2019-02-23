<?php
//Incluindo a conexão com banco de dados   
include_once("conexao/conexao.php");   
//Verifico se o usuário está logado no sistema
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location: login.php");
}
else {
   //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$nome = $_SESSION['Nome'];
		$RA = $_SESSION['RA'];
        $result_usuario = "SELECT * FROM aluno WHERE Nome = '$nome' && RA = '$RA' ";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
		if(isset($resultado)){	              
        }//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
		else{    
            //Váriavel global recebendo a mensagem de erro          
			header("Location: Home.php");
        }
}
?>