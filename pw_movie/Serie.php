<?php
//require_once("Obra.php");
//require_once("Temporada.php");
final class Serie extends Obra {
    private $temporadas = [];
    public function __construct($nome, $personagem, $temporada) {
        $this->nome = $nome;
        $this->personagem[] = $personagem;
        $this->temporadas[] = $temporada;
    }
    public function addTemporada($numero, $nota, $episodio) {
        $this->temporadas[] = new Temporada($numero, $nota, $episodio);
    }
    public function getTemporada() {
        return $this->temporadas;
    }
    public function obterNota() {
        $season_med = 0;
        foreach ($this->temporadas as $temporada) {
            $season_med += $temporada->getNota();
        }
        return ($season_med / count($this->temporadas));
    }
}
?>