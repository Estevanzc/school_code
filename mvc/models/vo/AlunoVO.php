<?php

namespace Model\VO;

final class AlunoVO extends VO {

    private $nome;
    private $matricula;
    private $foto;

    public function __construct($id = 0, $nome = "", $matricula = "", $foto = "") {
        parent::__construct($id);
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->foto = $foto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

}