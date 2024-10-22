<?php

namespace Model;

use Model\VO\DisciplinaVO;

final class DisciplinaModel extends Model {

    public function selectAll($vo) {
        $db = new Connection();
        $query = "SELECT * FROM disciplinas";
        $data = $db->select($query);

        $arrayDados = [];

        foreach($data as $row) {
            $vo = new DisciplinaVO($row["id"], $row["nome"], $row["ementa"]);
            array_push($arrayDados, $vo);
        }

        return $arrayDados;
    }

    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM disciplinas WHERE id = :id";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);

        return new DisciplinaVO($data[0]["id"], $data[0]["nome"], $data[0]["ementa"]);
    }

    public function insert($vo) {
        $db = new Connection();
        $query = "INSERT INTO disciplinas VALUES (default, :nome, :ementa)";
        $binds = ["nome" => $vo->getNome(), "ementa" => $vo->getEmenta()];

        return $db->execute($query, $binds);
    }

    public function update($vo) {
        $db = new Connection();
        if (empty($vo->getEmenta())) {
            $query = "UPDATE disciplinas SET nome = :nome WHERE id = :id";
            $binds = [
                "nome" => $vo->getNome(),
                "id" => $vo->getId()
            ];
        } else {
            $query = "UPDATE disciplinas SET nome = :nome, ementa = :ementa WHERE id = :id";
            $binds = [
                "nome" => $vo->getNome(),
                "ementa" => $vo->getEmenta(),
                "id" => $vo->getId()
            ];
        }

        return $db->execute($query, $binds);
    }

    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM disciplinas WHERE id = :id";
        $binds = ["id" => $vo->getId()];

        return $db->execute($query, $binds);
    }



}