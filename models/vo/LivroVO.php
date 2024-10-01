<?php
namespace Model\VO;

final class LivroVO extends VO {
    private $titulo;
    private $quantidade;
    private $autores;
    private $editora;
    private $ano;
    private $ISBN;
    public function __construct($id = 0, $titulo = "", $autores = "", $editora = "", $ano = "", $quantidade = 0, $ISBN = "") {
        parent::__construct($id);
        $this->titulo = $titulo;
        $this->quantidade = $quantidade;
        $this->autores = $autores;
        $this->editora = $editora;
        $this->ano = $ano;
        $this->ISBN = $ISBN;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAutores($autores) {
        $this->autores = $autores;
    }
    public function getAutores() {
        return $this->autores;
    }
    public function setEditora($editora) {
        $this->editora = $editora;
    }
    public function getEditora() {
        return $this->editora;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function getAno() {
        return $this->ano;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    public function getISBN() {
        return $this->ISBN;
    }
    public function setISBN($ISBN) {
        $this->ISBN = $ISBN;
    }
}
?>