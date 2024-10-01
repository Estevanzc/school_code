<?php
namespace Model;
use Model\VO\LivroVO;

final class LivroModel extends Model {
    public function selectAll($vo) {
        $db = new Connection();
        $query = "SELECT * FROM livros";
        $data = $db->select($query);
        $arrayDados = [];
        foreach ($data as $row) {
            array_push($arrayDados, new LivroVO($row["id"], $row["titulo"], $row["autores"], $row["editora"], $row["ano"], $row["quantidade"], $row["ISBN"]));
        }
        return $arrayDados;
    }
    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM livros WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);
        return new LivroVO($data[0]["id"], $data[0]["titulo"], $data[0]["autores"], $data[0]["editora"], $data[0]["ano"], $data[0]["quantidade"], $data[0]["ISBN"]);
    }
    public function insert($vo) {
        $db = new Connection();
        $query = "INSERT INTO livros VALUES (default, :titulo, :autores, :editora, :ano, :quantidade, :ISBN)";
        $binds = ["titulo" => $vo->getTitulo(), "autores" => $vo->getAutores(), "editora" => $vo->getEditora(), "ano" => $vo->getAno(), "quantidade" => (int) $vo->getQuantidade(), "ISBN" => $vo->getISBN()];
        return $db->execute($query, $binds);
    }
    public function update($vo) {
        $db = new Connection();
        $query = "UPDATE livros SET titulo=:titulo, autores=:autores, editora=:editora, ano=:ano, quantidade=:quantidade, ISBN=:ISBN WHERE id=:id";
        $binds = ["id" => (int) $vo->getId(), "titulo" => $vo->getTitulo(), "autores" => $vo->getAutores(), "editora" => $vo->getEditora(), "ano" => $vo->getAno(), "quantidade" => (int) $vo->getQuantidade(), "ISBN" => $vo->getISBN()];
        return $db->execute($query, $binds);
    }
    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM livros WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        return $db->execute($query, $binds);
    }
}
?>