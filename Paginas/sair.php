<?php
    session_start();    
    // O unset limpa as variaveis de SESSION 
    unset(
        $_SESSION['Nome'],
        $_SESSION['usuarioNome']
    );  
    // Impossibilita o usuario de utilizar o sistema ate fazer o login de novo
    $_SESSION["erro"] = '';
    $_SESSION["logado"] = FALSE;	
    // redirecionar o usuario para a página de login
    header("Location: home.php");
