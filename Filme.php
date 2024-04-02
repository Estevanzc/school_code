<?php
require_once("Obra.php");
require_once("Midia.php");
final class Filme extends Obra implements Midia {
    private $duracao;
    private $nota;
    private $genero;
    public function __construct($nome, $personagem, $duracao, $nota, $genero) {
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->nota = $nota;
        $this->genero = $genero;
        $this->personagem[] = $personagem;
    }
    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }
    public function setNota($nota) {
        $this->nota = $nota;
    }
    public function setGenero($genero) {
        $this->genero = $genero;
    }
    public function getDuracao() {
        return $this->duracao;
    }
    public function getGenero() {
        return $this->genero;
    }
    public function obterNota() {
        return $this->nota;
    }
}
?>