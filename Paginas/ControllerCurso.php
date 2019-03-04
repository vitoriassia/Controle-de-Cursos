<?php

class Curso{

    # Atributos
    var $IDcurso;
    var $IDprofessor;
    var $Nome;
    var $QTDaula;
    var $descricao;
    var $datestart;
    var $dateend;
    var $acao;
    var $nameimg;

    # Metodo Construtor
    public function __construct($dados,$sessao,$IDcurso,$nameimg) {
       
		$this->IDcurso =  $IDcurso= $IDcurso;
        $this->IDprofessor = $IDprofessor = $sessao;
        $this->Nome =$Nome=$dados['Nome'];
        $this->QTDaula = $QTDaula=$dados['QTDaula'];
        $this->descricao = $descricao=$dados['descricao'];
        $this->datestart = $datestart= $dados['datestart'];
        $this->nameimg = $nameimg= $nameimg;
        $this->dateend = $dateend=$dados['dateend'];
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
    public function getdateS(){
        return $this->datestart;
    }

    public function setdateS($datestart){
        $this->datestart;
    }
    public function getdateE(){
        return $this->dateend;
    }

    public function setdateE($dateend){
        $this->dateend;
    }
    public function setDescricao($descricao){
        $this->descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function getnameimg(){
        return $this->nameimg;
    }

    public function setnameimg($nameimg){
        $this->nameimg;
    }
    public function getAcao(){
        return $this->acao;
    }

    public function setAcao($acao){
        $this->acao;
    }

    # Metodos
    public function add($Nome, $IDprofessor, $QTDaula, $dateend, $datestart, $descricao,$nameimg){
            

            include("conexao/conexao.php");
            $sql = "INSERT INTO curso (`Nome`, `IDprofessor`, `QTDaula`, `Descricao`,`dataStart`, `dateEnd`,`nome_imagem`) 
            VALUES ('$Nome','$IDprofessor', '$QTDaula', '$descricao', '$datestart', '$dateend','$nameimg');";
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
    public function alter($Nome, $IDprofessor, $QTDaula, $dateend, $datestart, $descricao){
               
                include("conexao/conexao.php");
                $sql = "UPDATE curso SET Nome='$Nome', QTDaula='$QTDaula', Descricao = '$descricao', dataStart ='$descricao', dataEnd ='$dataend'
                 WHERE IDcurso='$IDcurso'";
                $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
                mysqli_close($conexao);
                header("Location: Curso.php"); 
                
                
        
    }
}
  



?>