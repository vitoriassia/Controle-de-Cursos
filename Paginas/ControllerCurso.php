<?php

class Curso{

    # Atributos
    var $IDcurso;
    var $IDprofessor;
    var $Nome;
    var $QTDaula;

    # Metodo Construtor
    public function __construct($dados,$sessao) {
       
		$this->IDcurso =  $IDcurso= null;
        $this->IDprofessor = $IDprofessor = $sessao;
        $this->Nome =$Nome=$dados['Nome'];
        $this->QTDaula = $QTDaula=$dados['QTDaula'];
		
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

    # Metodos
    public function formulario($dados,$sessao){
        if (isset($dados["IDcurso"]))
            {
                $IDcurso=$dados["IDcurso"];
                setIDcurso($IDcurso);
            }
            $Nome=$dados['Nome'];
            setNome($Nome);
            $QTDaula=$dados['QTDaula'];
            setIDcurso($QTDaula);
            $IDprofessor=$sessao;
            setIDcurso($IDprofessor);
            
    }
    public function add($Nome, $IDprofessor, $QTDaula){
            

            include("conexao/conexao.php");
            $sql = "INSERT INTO curso (`Nome`, `IDprofessor`, `QTDaula`) VALUES ('$Nome','$IDprofessor', '$QTDaula');";
            $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());            
            mysqli_close($conexao);
            header("Location: Curso.php"); 
            

    }

    public function sessao(){
        session_start();  
    }
    
}
if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    session_start();  
    $newcurso = new Curso($_POST,$_SESSION['Nome']);
    $nome= $newcurso -> getNome();
    $IDprofessor= $newcurso -> getIDprofessor();
    $qtdaula= $newcurso -> getQTDaula();
    $newcurso ->add($nome , $IDprofessor, $qtdaula);

}

?>