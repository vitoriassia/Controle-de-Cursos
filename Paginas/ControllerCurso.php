<?php

class Curso{

    # Atributos
    var $IDcurso;
    var $IDprofessor;
    var $model;

    # Metodo Construtor
    public function __construct() {
       
        require_once 'Curso_Model.php';
		
	}
    # Metodos
    public function add_curso($dados,$sessao,$IDcurso){
        $model = new Curso_Model();
        $nome = $dados['Nome'];
        $qtd = $dados ['QTDaula'];
        $descricao = $dados['Descricao'];
        $dateStart = $dados['dataStart'];
        $dateEnd = $dados['dateEnd'];
        
        $data = array (
             'IDcurso' => $IDcurso,
             'IDprofessor' => $sessao,
             'Nome' => $nome,
             'QTDaula' => $qtd,
             'Descricao' => $descricao,
             'dataStart' => $dateStart,
             'dateEnd' => $dateEnd
         );
        
         $model -> add($data);
        
    }

    public function delete($IDcurso){
           
            include("conexao/conexao.php");
            $sql = "DELETE FROM curso WHERE IDcurso LIKE $IDcurso";
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