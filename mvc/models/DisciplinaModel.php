<?php
namespace Model;
use Model\VO\DisciplinaVO;

final class DisciplinaModel extends Model {
    public function selectAll($vo) {
        $db = new Connection;
        $query = "SELECT * FROM disciplinas";
        $data = $db->select($query);
        $arrayDados = [];
        foreach ($data as $row) {
            array_push($arrayDados, new DisciplinaVO($row["id"], $row["nome"]));
        }
        return $arrayDados;
    }
    public function selectOne($vo) {
        $db = new Connection;
        $query = "SELECT * FROM disciplinas WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);
        return new DisciplinaVO($data[0]["id"], $data[0]["nome"]);
    }
    public function insert($vo) {
    }
    public function update($vo) {
    }
    public function delete($vo) {
    }
}
?>