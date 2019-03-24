<?php

class Aluno{
   
    # Metodo Construtor
    public function __construct(){
        require_once 'AlunoModel.php';
        $this->model = new Aluno_Model();
    }
     
    # Metodos
   public function add_aluno($dados){
    $model =$this->model;

    $ra = $dados['Ra'];
    $IdAluno = $dados['IdAluno'];
    $nome =$dados['Nome'];
    $email = $dados['Email'];
    $curso = $dados['CursoFaculdade'];
    $senha = $dados ['Senha'];
    
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
    public function alter_aluno(){

    }
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