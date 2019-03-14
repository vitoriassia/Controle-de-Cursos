<?php
class Curso_Model{

# Metodo Construtor
    public function __construct() {
       
		include("conexao/conexao.php");
    	
    }
    
    
    Public function get_todosCursos(){

        include("conexao/conexao.php");
        $query = "SELECT * FROM curso";
        $resultado = mysqli_query($conexao,$query);
        return $resultado;

    }
    Public function get_Curso($IDcurso){
        include("conexao/conexao.php");
        $query = "SELECT * FROM curso WHERE IDcurso LIKE '$IDcurso'";
        $resultado = mysqli_query($conexao,$query);
        return $linha = mysqli_fetch_array($resultado);

    }


    public function add($data){
        include("conexao/conexao.php");
        $nome = $data["Nome"];
        $idprofessor = $data['IDprofessor'];
        $qtdaula=  $data['QTDaula'];
        $descricao = $data['Descricao'];
        $datestart = $data['dataStart'];
        $dateend = $data['dateEnd'];


        $sql = "INSERT INTO curso (`Nome`, `IDprofessor`, `QTDaula`, `Descricao`,`dataStart`, `dateEnd`) 
        VALUES ('$nome','$idprofessor', '$qtdaula', '$descricao', '$datestart', '$dateend');";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: Curso.php");
    }
}


    ?>