<?php

class Aluno{
   
    # Metodo Construtor
    public function __construct(){
        require_once 'AlunoModel.php';
        $this->model = new Aluno_Model();
    }
     
    # Metodos
   public function add_aluno($dados,$ra){
    $model =$this->model;
    $ra = $ra ;
    $nome =$dados['Nome'];
    $email = $dados['Email'];
    $curso = $dados['CursoFaculdade'];
    $data = array (

        'RA'=> $ra,
        'Nome'=>$nome,
        'Email' => $email,
        'CursoFaculdade' => $curso

    );
    $model -> add($data);
    

    }
    public function alter_aluno(){
        $model =$this->model;
    $ra = $ra ;
    $nome =$dados['Nome'];
    $email = $dados['Email'];
    $curso = $dados['CursoFaculdade'];
    $data = array (

        'RA'=> $ra,
        'Nome'=>$nome,
        'Email' => $email,
        'CursoFaculdade' => $curso

    );
    $model -> alter($data);


    }
    public function delete_aluno($RA){
        $model =$this->model;
        $model -> delete($RA);

    }

    public function RetirarCertificado(){

    }

    
}
    

?>