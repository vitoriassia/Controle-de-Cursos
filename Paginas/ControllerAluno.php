<?php

class Aluno{
   
    var $ra;
    var $idaluno;
    var $nome;
    var $email;
    var $senha;
    var $curso;

    # Metodo Construtor
    public function __construct(){
        require_once 'AlunoModel.php';
        $this->model = new Aluno_Model();
    }
     
    # Metodos
   public function add_aluno(){
    $model =$this->model;

    $ra = $this ->ra;
    $IdAluno = $this ->idaluno;
    $nome = $this->nome;
    $email = $this->email;
    $curso = $this->curso;
    $senha = $this->senha;
    
    $data = array (

        'Ra'=> $ra,
        'Nome'=>$nome,
        'Email' => $email,
        'CursoFaculdade' => $curso,
        'IdAluno' => $IdAluno,
        'Senha' => $senha,
    );
    $model -> add($data);
    

    }
    //public function alter_aluno(){}
        
    public function delete_aluno($RA){
        $model =$this->model;
        $model -> delete($RA);

    }

    public function RetirarCertificado(){

    }
    public function exibir_CA($id){
        $model =$this->model;
       return $model -> exibir_cursosA($id);
    }
    
}
    

?>