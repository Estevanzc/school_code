<?php
namespace Model\VO;

final class RetiradaVO extends VO {
    private $aluno_id;
    private $livro_id;
    private $retirada;
    private $devolucao;
    public function __construct($id = 0, $aluno_id = 0, $livro_id = 0, $retirada = 0, $devolucao = "") {
        parent::__construct($id);
        $this->aluno_id = $aluno_id;
        $this->livro_id = $livro_id;
        $this->retirada = $retirada;
        $this->devolucao = $devolucao;
    }
    public function getAluno_id() {
        return $this->aluno_id;
    }
    public function setAluno_id($aluno_id) {
        $this->aluno_id = $aluno_id;
    }
    public function setRetirada($retirada) {
        $this->retirada = $retirada;
    }
    public function getRetirada() {
        return $this->retirada;
    }
    public function setDevolucao($devolucao) {
        $this->devolucao = $devolucao;
    }
    public function getDevolucao() {
        return $this->devolucao;
    }
    public function getLivro_id() {
        return $this->livro_id;
    }
    public function setLivro_id($livro_id) {
        $this->livro_id = $livro_id;
    }
}
?>