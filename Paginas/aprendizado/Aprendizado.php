<?php
/**
 * Created by PhpStorm.
 * User: pe_lf
 * Date: 18/03/2019
 * Time: 22:35
 */
include_once("../conexao/conexao.php");

class Aprendizado
{

    var $model;
    var $idaluno;
    var $idcurso;

    # Metodo Constructor
    public function __construct(){
        require_once 'AprendizadoModel.php';
        $this->model = new AprendizadoModel();
    }

    # Metodos

    /**
     * @param $Email
     * @param $IDcurso
     */
    public function AddPresenca(){
        
        $data = array (

            'IdCurso'=> $this->idcurso,
            'IdAluno'=>$this->idaluno

        );
        $this->model -> Presenca($data);

    }

    public function Inscrever(){
        
        $data = array (

            'IdCurso'=> $this->idcurso,
            'IdAluno'=>$this->idaluno


        );
        $this->model -> Add($data);

    }

   /* public function Excluir($Email,$IDcurso){
        $model =$this->model;
        $Email = $dados['Email'];
        $IDcurso = $dados['CursoFaculdade'];
        $data = array (

            'IDcurso'=> $IDcurso,
            'Email'=>$Email


        );
        $this->model -> Delete($data);

    }*/
    public function get_presenca($idaluno){
        $model =$this->model;
        return $model->get_presenca($idaluno);
    }



}