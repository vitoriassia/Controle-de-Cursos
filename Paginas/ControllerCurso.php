<?php

class Curso{

    # Atributos
    var $IDcurso;
    var $IDprofessor;
    var $Nome;
    var $QTDaula;
    var $acao;

    # Metodo Construtor
    public function __construct($dados,$sessao,$IDcurso) {
       
		$this->IDcurso =  $IDcurso= $IDcurso;
        $this->IDprofessor = $IDprofessor = $sessao;
        $this->Nome =$Nome=$dados['Nome'];
        $this->QTDaula = $QTDaula=$dados['QTDaula'];
        $this ->acao = $acao=$dados['acao'];
		
	}
    
    # Metodos Getters e Setters

    public function getIDcurso(){
        return $this->IDcurso;
    }

    public function setIDcurso($IDcurso){
        $this->IDcurso;
    }

    public function getIDprofessor(){
        return $this->IDprofessor;
    }

    public function setIDprofessor($IDprofessor){
        $this->IDprofessor;
    }

    public function getNome(){
        return $this->Nome;
    }

    public function setNome($Nome){
        $this->Nome;
    }
    
    public function getQTDaula(){
        return $this->QTDaula;
    }

    public function setQTDaula($QTDaula){
        $this->QTDaula;
    }
    public function getAcao(){
        return $this->acao;
    }

    public function setAcao($acao){
        $this->acao;
    }

    # Metodos
    public function add($Nome, $IDprofessor, $QTDaula){
            

            include("conexao/conexao.php");
            $sql = "INSERT INTO curso (`Nome`, `IDprofessor`, `QTDaula`) VALUES ('$Nome','$IDprofessor', '$QTDaula');";
            $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
            mysqli_close($conexao);
            header("Location: Curso.php"); 
            

    }

    public function delete($IDcurso){
           
            include("conexao/conexao.php");
            $sql = "DELETE FROM curso WHERE IDcurso='$IDcurso'";
            $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
            mysqli_close($conexao);
            header("Location: Curso.php"); 
           
        
    }
    public function alter($Nome, $IDcurso, $QTDaula){
               
                include("conexao/conexao.php");
                $sql = "UPDATE curso SET Nome='$Nome', QTDaula='$QTDaula' WHERE IDcurso='$IDcurso'";
                $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
                mysqli_close($conexao);
                header("Location: Curso.php"); 
                
                
        
    }
}
  



?>