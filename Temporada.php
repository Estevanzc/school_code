<?php
require_once("Episodio.php");
class Temporada {
    private $numero;
    private $nota;
    private $episodios = [];
    public function __construct($numero, $nota, $episodio) {
        $this->numero = $numero;
        $this->nota = $nota;
        $this->episodios[] = $episodio;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setNota($nota) {
        $this->nota = $nota;
    }
    public function addEpisodio($numero, $nome, $duracao) {
        $this->episodios[] = new Episodio($numero, $nome, $duracao);
    }
    public function getNumero() {
        return $this->numero;
    }
    public function getNota() {
        return $this->nota;
    }
    public function getEpisodios() {
        return $this->episodios;
    }
}
?>