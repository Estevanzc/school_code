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
            array_push($arrayDados, new AlunoVO($row["id"], $row["nome"], $row["data_nasc"], $row["curso"], $row["matricula"], $row["cpf"]));
        }
        return $arrayDados;
    }
    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM alunos WHERE id=:id;";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);
        return new AlunoVO($data[0]["id"], $data[0]["nome"], $data[0]["data_nasc"], $data[0]["curso"], $data[0]["matricula"], $data[0]["cpf"]);
    }
    public function insert($vo) {
        $db = new Connection();
        $query = "INSERT INTO alunos VALUES (default, :nome, :data_nasc, :curso, :matricula, :cpf);";
        $binds = ["nome" => $vo->getNome(), "matricula" => (int) $vo->getMatricula(), "data_nasc" => $vo->getData_nasc(), "curso" => (int) $vo->getCurso(), "cpf" => $vo->getcpf()];
        return $db->execute($query, $binds);
    }
    public function update($vo) {
        $db = new Connection();
        $query = "UPDATE alunos SET nome=:nome, matricula=:matricula, data_nasc=:data_nasc, curso=:curso, cpf=:cpf WHERE id=:id;";
        $binds = ["id" => $vo->getId(), "nome" => $vo->getNome(), "matricula" => (int) $vo->getMatricula(), "data_nasc" => $vo->getData_nasc(), "curso" => (int) $vo->getCurso(), "cpf" => $vo->getcpf()];
        return $db->execute($query, $binds);
    }
    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM alunos WHERE id=:id;";
        $binds = ["id" => $vo->getId()];
        return $db->execute($query, $binds);
    }
}
?>