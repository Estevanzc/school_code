<?php
final class DiscplinaVO extends VO {
    private $nome;
    public function __construct($id = 0, $nome = "") {
        parent::__construct($id);
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
}
?>