<?php
final class DisciplinaModel extends Model {
    public function selectAll($vo) {
        $db = new Connection;
        $query = "SELECT * FROM disciplinas";
        $data = $db->select($query);
        $arrayDados = [];
        foreach ($data as $row) {
            array_push($arrayDados, new DiscplinaVO($row["id"], $row["nome"]));
        }
        return $arrayDados;
    }
    public function selectOne($vo) {
    }
    public function insert($vo) {
    }
    public function update($vo) {
    }
    public function delete($vo) {
    }
}
?>