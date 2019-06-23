<?php


class avaliacaoController
{
        var $idCurso;
        var $idAluno;
        var $nota;
        var $model;
    public function __construct() {

        require_once 'avaliacaoModel.php';
        $this->model = new avaliacaoModel();

    }
    public function  addAvaliacao(){
        $data= array(
            "idCurso"=>$this->idCurso,
            "idAluno"=>$this->idAluno,
            "nota"=>$this->nota
        );
        $this->model->addAvaliacao($data);
    }
    public function getAvaliacoes($id){

       return $this->model->getAvaliacoes($id);
    }
}