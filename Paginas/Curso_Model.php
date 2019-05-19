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
        $query = "SELECT * FROM curso WHERE IdCurso LIKE '$IDcurso'";
        $resultado = mysqli_query($conexao,$query);
        return $resultado;

    }


    public function add($data){
        include("conexao/conexao.php");
        $nome = $data["Nome"];
        $idprofessor = $data['IdProfessor'];
        $qtdaula=  $data['QtdAula'];
        $descricao = $data['Descricao'];
        $datestart = $data['DateStart'];
        $dateend = $data['DateEnd'];
        $nameimg = $data['NomeImagem'];



        $sql = "INSERT INTO curso (`Nome`, `IdProfessor`, `QtdAula`, `Descricao`,`DateStart`, `DateEnd`,`NomeImagem`) 
        VALUES ('$nome','$idprofessor', '$qtdaula', '$descricao', '$datestart', '$dateend','$nameimg');";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: professor.php");
    }
    public function delete($IdCurso){
        
        include("conexao/conexao.php");
        $sql = "DELETE FROM curso WHERE IdCurso LIKE $IdCurso";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
        mysqli_close($conexao);
        header("Location: professor.php"); 
    }

    public function alter($data){
        include("conexao/conexao.php");
        $nome = $data["Nome"];
        $qtdaula=  $data['QtdAula'];
        $descricao = $data['Descricao'];
        $datestart = $data['DateStart'];
        $dateend = $data['DateEnd'];
        $nameimg = $data['NomeImagem'];
        $IdCurso = $data['IdCurso'];
        $sql = "UPDATE curso SET Nome='$nome', QtdAula='$qtdaula', Descricao ='$descricao', 
                DateStart='$datestart', DateEnd='$dateend', NomeImagem= '$nameimg'
                 WHERE IdCurso='$IdCurso'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
        mysqli_close($conexao);
        header("Location: professor.php"); 
        
        
    }
}
    


    ?>