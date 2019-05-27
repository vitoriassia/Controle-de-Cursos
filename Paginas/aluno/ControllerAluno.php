<?php

class Aluno{
   
    var $ra;
    var $idaluno;
    var $nome;
    var $email;
    var $senha;
    var $curso;
    var $model;

    # Metodo Construtor
    public function __construct(){
        require_once 'AlunoModel.php';
        $this->model = new Aluno_Model();
    }
     
    # Metodos
   public function add_aluno(){
  
            $data = array (

                'Ra'=> $this ->ra,
                'Nome'=>$this->nome,
                'Email' => $this->email,
                'CursoFaculdade' => $this->curso,
                'IdAluno' => $this ->idaluno,
                'Senha' => $this->senha
            );
            $this->model-> add($data);
            

    }
    //public function alter_aluno(){}
        
    public function delete_aluno($RA){
        
        $this->model -> delete($RA);

    }

    public function RetirarCertificado(){

    }
    public function exibir_CA($id){
        $model =$this->model;
       return $model -> exibir_cursosA($id);
    }
    public function get_Aluno($id){
        $model=$this->model;
        return $model -> get_aluno($id);
    }
    
}
    

