<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conexao/conexao.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['Nome'])) && (isset($_POST['RA']))){
        $Nome = mysqli_real_escape_string($conexao, $_POST['Nome']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $RA = mysqli_real_escape_string($conexao, $_POST['RA']);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM aluno , professor WHERE aluno.Nome = '$Nome' && aluno.RA = '$RA' or professor.Nome = '$Nome' && professor.RA = '$RA' ";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
		
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['Nome'] = $_POST['Nome'];
            $_SESSION['RA'] = $_POST['RA'];    
            $_SESSION["logado"] = True;		
            $_SESSION["erro"] = '';
                header("Location: Home.php");           
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION["logado"] = FALSE;
            $_SESSION["erro"] = '<br> Nome ou senha incorreto';
            header("Location: Login.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION["logado"] = FALSE;
        $_SESSION["erro"] = '<br> Nome ou senha incorreto';
        header("Location: Login.php");
    }
?>