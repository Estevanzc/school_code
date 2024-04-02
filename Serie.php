<?php
require_once("Obra.php");
require_once("Temporada.php");
final class Temporada extends Obra {
    private $temporadas = [];
    public function __construct($nome, $personagem, $temporada) {
        $this->nome = $nome;
        $this->personagem[] = $personagem;
        $this->temporadas[] = $temporada;
    }
}
?>