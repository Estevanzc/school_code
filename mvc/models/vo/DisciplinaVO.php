<?php

namespace Model\VO;

final class DisciplinaVO extends VO {

    private $nome;
    private $ementa;

    public function __construct($id = 0, $nome = "", $ementa = "") {
        parent::__construct($id);
        $this->nome = $nome;
        $this->ementa = $ementa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getEmenta() {
        return $this->ementa;
    }

    public function setEmenta($ementa) {
        $this->ementa = $ementa;
    }

}