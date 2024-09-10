<?php
namespace Model\VO;

final class MatriculaVO extends VO {
    private $idAluno;
    private $idDisciplina;
    private $disciplina;
    private $aluno;
    private $ano;
    public function __construct($id = 0, $idAluno = null, $idDisciplina = null, $ano = 0, $disciplina = null, $aluno = null) {
        parent::__construct($id);
        $this->idAluno = $idAluno;
        $this->idDisciplina = $idDisciplina;
        $this->ano = $ano;
        $this->disciplina = $disciplina;
        $this->aluno = $aluno;
    }
    public function getIdAluno() {
        return $this->idAluno;
    }
    public function getDisciplina() {
        return $this->disciplina;
    }
    public function getAluno() {
        return $this->aluno;
    }
    public function getIdDisciplina() {
        return $this->idDisciplina;
    }
    public function getAno() {
        return $this->ano;
    }
    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }
    public function setIdDisciplina($idDisciplina) {
        $this->idDisciplina = $idDisciplina;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function setDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }
    public function setAluno($aluno) {
        $this->aluno = $aluno;
    }
}
?>