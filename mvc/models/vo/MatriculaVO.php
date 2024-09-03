<?php
namespace Model\VO;

final class MatriculaVO extends VO {
    private $idAluno;
    private $idMatricula;
    private $ano;
    public function __construct($id = 0, $idAluno = null, $idMatricula = null, $ano = 0) {
        parent::__construct($id);
        $this->idAluno = $idAluno;
        $this->idMatricula = $idMatricula;
        $this->ano = $ano;
    }
    public function getIdAluno() {
        return $this->idAluno;
    }
    public function getIdMatricula() {
        return $this->idMatricula;
    }
    public function getAno() {
        return $this->ano;
    }
    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }
    public function setIdMatricula($idMatricula) {
        $this->idMatricula = $idMatricula;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
}
?>