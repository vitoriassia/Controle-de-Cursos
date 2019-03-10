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
   
    var $nameimg;

    # Metodo Construtor
    public function __construct($dados,$sessao,$IDcurso,$nameimg) {
       
		$this->IDcurso =  $IDcurso= $IDcurso;
        $this->IDprofessor = $IDprofessor = $sessao;
        $this->Nome =$Nome=$dados['Nome'];
        $this->QTDaula = $QTDaula=$dados['QTDaula'];
        $this->descricao = $descricao=$dados['Descricao'];
        $this->datestart = $datestart= $dados['dataStart'];
        $this->nameimg = $nameimg= $nameimg;
        $this->dateend = $dateend=$dados['dateEnd'];
        
		
	}
    
    # Metodos Getters e Setters

    public function getIDcurso(){
        return $this->IDcurso;
    }

    public function setIDcurso($IDcurso){
        $this->IDcurso = $IDcurso;
    }

    public function getIDprofessor(){
        return $this->IDprofessor;
    }

    public function setIDprofessor($IDprofessor){
        $this->IDprofessor = $IDprofessor;
    }

    public function getNome(){
        return $this->Nome;
    }

    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    
    public function getQTDaula(){
        return $this->QTDaula;
    }

    public function setQTDaula($QTDaula){
        $this->QTDaula= $QTDaula;
    }
    public function getdateS(){
        return $this->datestart;
    }

    public function setdateS($datestart){
        $this->datestart = $datestart;
    }
    public function getdateE(){
        return $this->dateend;
    }

    public function setdateE($dateend){
        $this->dateend = $dateend;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function getnameimg(){
        return $this->nameimg;
    }

    public function setnameimg($nameimg){
        $this->nameimg = $nameimg;
    }
    

    # Metodos
    public function add(){
            

            include("conexao/conexao.php");
            $sql = "INSERT INTO curso (`Nome`, `IDprofessor`, `QTDaula`, `Descricao`,`dataStart`, `dateEnd`,`nome_imagem`) 
            VALUES ('$this->Nome','$this->IDprofessor', '$this->QTDaula', '$this->descricao', '$this->datestart', '$this->dateend','$this->nameimg');";
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
    public function alter(){
               
                include("conexao/conexao.php");
                    $IDcurso = $this ->IDcurso;
                    $nomeimagem = $this->nameimg;
                $sql = "UPDATE curso SET Nome='$this->Nome', QTDaula='$this->QTDaula', Descricao ='$this->descricao', 
                dataStart='$this->datestart', dateEnd='$this->dateend', nome_imagem= '$nomeimagem'
                 WHERE IDcurso='$IDcurso'";
                $resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
                mysqli_close($conexao);
                header("Location: Curso.php"); 
                
                
                
                
        
    }
  
}

  



?>