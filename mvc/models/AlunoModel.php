<?php
namespace Model;
use Model\VO\AlunoVO;

final class AlunoModel extends Model {
    public function selectAll($vo) {
        $db = new Connection();
        $query = "SELECT * FROM alunos";
        $data = $db->select($query);
        $arrayDados = [];
        foreach ($data as $row) {
            array_push($arrayDados, new AlunoVO($row["id"], $row["nome"], $row["matricula"]));
        }
        return $arrayDados;
    }
    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM alunos WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);
        return new AlunoVO($data[0]["id"], $data[0]["nome"], $data[0]["matricula"]);
    }
    public function insert($vo) {
        $db = new Connection();
        $query = "INSERT INTO alunos VALUES (default, :nome, :matricula)";
        $binds = ["nome" => $vo->getNome(), "matricula" => (int) $vo->getMatricula()];
        return $db->execute($query, $binds);
    }
    public function update($vo) {
        $db = new Connection();
        $query = "UPDATE alunos SET nome=:nome, matricula=:matricula WHERE id=:id";
        $binds = ["id" => $vo->getId(), "nome" => $vo->getNome(), "matricula" => (int) $vo->getMatricula()];
        return $db->execute($query, $binds);
    }
    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM alunos WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        return $db->execute($query, $binds);
    }
}
?>