<?php
namespace Model\VO;

final class AlunoVO extends VO {
    private $nome;
    private $matricula;
    private $data_nasc;
    private $curso;
    private $cpf;
    public function __construct($id = 0, $nome = "", $data_nasc = "", $curso = 0, $matricula = 0, $cpf = "",) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->data_nasc = $data_nasc;
        $this->curso = $curso;
        $this->cpf = $cpf;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setData_nasc($data_nasc) {
        $this->data_nasc = $data_nasc;
    }
    public function getData_nasc() {
        return $this->data_nasc;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
}
?>