<?php

class Professor{
    
    # Atributos
    var $model;
    var $nome;
    var $id;
    var $email;
    var $senha;

    # Metodo Construtor
    public function __construct(){
        require_once 'ProfessorModel.php';
        $this->model = new Professor_Model();
    }

  

    # Metodos
    function Presenca(){

    }

    public function add_professor(){
        $model =$this->model;
        $nome =$this->nome;
        $email = $this->email;
        $idprofessor = $this->id;
        $senha = $this->senha;
        $data = array (

            'Nome'=>$nome,
            'Email' => $email,
            'IdProfessor' => $idprofessor,
            'Senha' => $senha



        );
        $model -> add($data);
        
         
        

}
    public function delete_professor($IdProfessor){
           
        $model =$this->model;
        $model -> delete($IdProfessor);
        
       
    
}
/*
public function alter_professor($dados){
           
            $model =$this->model;
            $nome =$dados['Nome'];
            $email = $dados['Email'];
            $idprofessor = $dados['IdProfessor'];
            $senha = $dados['Senha'];
            $data = array (

                
            'Nome'=>$nome,
            'Email' => $email,
            'IdProfessor' => $idprofessor,
            'Senha' => $senha

            );
            $model -> alter($data);
            }*/
public function get_professor($id){
                $model =$this->model;
                return $model -> exibir_professor($id);
}
public function get_professorS($id){
    $model =$this->model;
    return $model -> exibir_professorS($id);
}
    
}

?>