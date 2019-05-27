<?php

class Curso{

    # Atributos
    var $idcurso;
    var $idprofessor;
    var $model;
    var $nome;
    var $qtd;
    var $dateStart;
    var $dateEnd;

    # Metodo Construtor
    public function __construct() {
       
        require_once 'Curso_Model.php';
        $this->model = new Curso_Model(); 
		
	}
    # Metodos
    public function add_curso(){
       
        // Upando a imagem
        $_UP['pasta']= 'iconecurso/';
        $_UP ['tamanho'] = 1024 + 1024 + 100;
        $extensao= strtolower(end(explode('.',$_FILES['imagem']['name'])));
        $nome_final = $this->nome.'.'. $extensao;
        move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nome_final);
        
        
        $data = array (
             'IdProfessor' => $this->idprofessor,
             'Nome' => $this->nome,
             'QtdAula' => $this->qtd,
             'Descricao' => $this->descricao,
             'DateStart' => $this->dateStart,
             'DateEnd' => $this->dateEnd,
             'NomeImagem' =>$nome_final
         );
        
         $this->model -> add($data);
        
    }

    public function delete_curso(){

        $model = $this->model;
        $idcurso =$this->idcurso;
        $pastaDel = 'iconecurso';
        $banco = $this->model ->get_Curso($idcurso);
        $banco = array($banco);
        $nome = $banco ['NomeImagem'];  
        unlink($pastaDel.'/'.$nome);
        $this->model -> delete($idcurso);
           
           
        
    }
    public function alter_curso(){
               
        $model = $this->model;
        $idcurso =$this->idcurso;
        $banco = $model -> get_curso($idcurso);
        $nome = $this->nome;
        $qtd = $this->qtd;
        $descricao = $this->descricao;
        $dateStart = $this->dateStart;
        $dateEnd = $this->dateEnd;
        $nome1 = $banco['NomeImagem'];

        // Upando a imagem
         try {
            $_UP['pasta']= 'iconecurso/';
            $_UP ['tamanho'] = 1024 + 1024 + 100;
            $extensao1= explode('.',$_FILES['imagem']['name']);
            $extensao = strtolower(end($extensao1));
            $nome_final = $nome.'.'. $extensao;
            move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nome_final);
            $pastaDel = 'iconecurso';
            if ($nome1 != $nome_final){
              unlink($pastaDel.'/'.$nome1);
            }
            
            $data = array (
                'IdCurso' => $idcurso,
                'Nome' => $nome,
                'QtdAula' => $qtd,
                'Descricao' => $descricao,
                'DateStart' => $dateStart,
                'DateEnd' => $dateEnd,
                'NomeImagem' =>$nome_final
            );
           
            $model -> alter($data);
            } catch (Exeption $e){
                $data = array (
                    'IdCurso' => $IdCurso,
                    'Nome' => $nome,
                    'QtdAula' => $qtd,
                    'Descricao' => $descricao,
                    'DateStart' => $dateStart,
                    'DateEnd' => $dateEnd,
                    'NomeImagem' =>$nome1
                );
               
                $model -> alter($data);
            }        
        
    }

    public function get_cursos(){
        
        return $this->model -> get_todosCursos();
    }  
    public function exibir_curso($IDcurso){
       
        return $this->model -> get_Curso($IDcurso);
    }

  
}

  



?>