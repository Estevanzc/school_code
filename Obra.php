<?php
require_once("Personagem.php");
abstract class Obra {
    protected $nome;
    protected $personagem = [];
    public function __construct($nome, $personagem) {
        $this->nome = $nome;
        $this->personagem[] = $personagem;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function addProtagonista($protagonista) {
        $this->personagem[] = $protagonista;
    }
    public function obterProtagonista() {
        $protagonista = [];
        foreach ($this->personagem as $person) {
            if ($person->protagonista) {
                $protagonista[] = $person;
            }
        }
        return $protagonista;
    }
    public function getNome() {
        return $this->nome;
    }
    abstract public function obterNota();
}
?>