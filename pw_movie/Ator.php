<?php
class Ator {
    private $nome;
    private $idade;
    private $pais;
    public function __construct($nome, $idade, $pais) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->pais = $pais;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setPais($pais) {
        $this->pais = $pais;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getPais() {
        return $this->pais;
    }
}
?>