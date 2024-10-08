<?php

namespace Model\VO;

final class AlunoVO extends VO {

    private $nome;
    private $matricula;

    public function __construct($id = 0, $nome = "", $matricula = "") {
        parent::__construct($id);
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

}