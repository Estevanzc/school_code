<?php

namespace Model\VO;

final class MatriculaVO extends VO {

    private $idDisciplina;
    private $idAluno;
    private $ano;
    private $disciplina;
    private $aluno;

    public function __construct($id = 0, $idDisciplina = null, $idAluno = null, $ano = 0, $disciplina = "", $aluno = "") {
        parent::__construct($id);
        $this->idDisciplina = $idDisciplina;
        $this->idAluno = $idAluno;
        $this->ano = $ano;
        $this->disciplina = $disciplina;
        $this->aluno = $aluno;
    }

    public function getIdDisciplina() {
        return $this->idDisciplina;
    }

    public function setIdDisciplina($idDisciplina) {
        $this->idDisciplina = $idDisciplina;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function setDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function setAluno($aluno) {
        $this->aluno = $aluno;
    }

}