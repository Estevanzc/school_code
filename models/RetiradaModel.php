<?php
namespace Model;
use Model\VO\RetiradaVO;

final class RetiradaModel extends Model {
    public function selectAll($vo) {
        $db = new Connection();
        $query = "SELECT r.id, a.nome as aluno, l.titulo as livro, retirada, devolucao FROM retiradas as r join alunos as a on a.id = r.aluno_id join livros as l on l.id = r.livro_id";
        $data = $db->select($query);
        $arrayDados = [];
        foreach ($data as $row) {
            array_push($arrayDados, new RetiradaVO($row["id"], $row["aluno"], $row["livro"], $row["retirada"], $row["devolucao"]));
        }
        return $arrayDados;
    }
    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM retiradas WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);
        return new RetiradaVO($data[0]["id"], $data[0]["aluno_id"], $data[0]["livro_id"], $data[0]["retirada"], $data[0]["devolucao"]);
    }
    public function insert($vo) {
        $db = new Connection();
        $query = "INSERT INTO retiradas VALUES (default, :aluno_id, :livro_id, :retirada, :devolucao)";
        $binds = ["aluno_id" => (int) $vo->getAluno_id(), "livro_id" => (int) $vo->getLivro_id(), "retirada" => $vo->getRetirada(), "devolucao" => $vo->getDevolucao()];
        return $db->execute($query, $binds);
    }
    public function update($vo) {
        $db = new Connection();
        $query = "UPDATE retiradas SET aluno_id=:aluno_id, livro_id=:livro_id, retirada=:retirada, devolucao=:devolucao WHERE id=:id";
        $binds = ["id" => (int) $vo->getId(), "aluno_id" => (int) $vo->getAluno_id(), "livro_id" => (int) $vo->getLivro_id(), "retirada" => $vo->getRetirada(), "devolucao" => $vo->getDevolucao()];
        return $db->execute($query, $binds);
    }
    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM retiradas WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        return $db->execute($query, $binds);
    }
}
?>