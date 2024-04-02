<?php
require_once("Midia.php");
class Episodio implements Midia {
    private $numero;
    private $nome;
    private $duracao;
    public function __construct($numero, $nome, $duracao) {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->duracao = $duracao;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getDuracao() {
        return $this->duracao;
    }
}
?>