<?php

class Curso{

    # Atributos
    var $IDcurso;
    var $IDprofessor;
    var $model;

    # Metodo Construtor
    public function __construct() {
       
        require_once 'Curso_Model.php';
        $this->model = new Curso_Model(); 
		
	}
    # Metodos
    public function add_curso($dados,$sessao){
        $model = $this->model;
        $nome = $dados['Nome'];
        $qtd = $dados ['QtdAula'];
        $idcurso = $dados['IdCurso'];
        $descricao = $dados['Descricao'];
        $dateStart = $dados['DateStart'];
        $dateEnd = $dados['DateEnd'];
        // Upando a imagem
        $_UP['pasta']= 'iconecurso/';
        $_UP ['tamanho'] = 1024 + 1024 + 100;
        $extensao= strtolower(end(explode('.',$_FILES['imagem']['name'])));
        $nome_final = $nome.'.'. $extensao;
        move_uploaded_file ($_FILES['imagem'] ['tmp_name'],$_UP['pasta'].$nome_final);
        
        
        $data = array (
             'IdCurso' => $IDcurso,
             'IdProfessor' => $sessao,
             'Nome' => $nome,
             'QtdAula' => $qtd,
             'Descricao' => $descricao,
             'DateStart' => $dateStart,
             'DateEnd' => $dateEnd,
             'NomeImagem' =>$nome_final
         );
        
         $model -> add($data);
        
    }

    public function delete_curso($IdCurso){
        $model = $this->model;
        $pastaDel = 'iconecurso';
        $banco = $model ->get_Curso($IdCurso);
        $nome = $banco ['NomeImagem'];
        unlink($pastaDel.'/'.$nome);
        $model -> delete($IdCurso);
           
           
        
    }
    public function alter_curso($dados,$sessao,$IDcurso){
               
        $model = $this->model;
        $banco = $model -> get_curso($IDcurso);
        $nome = $dados['Nome'];
        $qtd = $dados ['QTDaula'];
        $descricao = $dados['Descricao'];
        $dateStart = $dados['dataStart'];
        $dateEnd = $dados['dateEnd'];
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
                'IdCurso' => $IDcurso,
                'Nome' => $nome,
                'QtdAula' => $qtd,
                'Descricao' => $descricao,
                'DateStart' => $dateStart,
                'DateEnd' => $dateEnd,
                'NomeImagem' =>$nome_final
            );
           
            $model -> alter($data,$IDcurso);
            } catch (Exeption $e){
                $data = array (
                    'IdCurso' => $IDcurso,
                    'Nome' => $nome,
                    'QtdAula' => $qtd,
                    'Descricao' => $descricao,
                    'DateStart' => $dateStart,
                    'DateEnd' => $dateEnd,
                    'NomeImagem' =>$nome1
                );
               
                $model -> alter($data,$IDcurso);
            }        
        
    }

    public function exibir_cursos(){
        $model = $this->model;
        return $model -> get_todosCursos();
    }  
    public function exibir_curso($IDcurso){
        $model = $this->model;
        return $model -> get_Curso($IDcurso);
    }

  
}

  



?>