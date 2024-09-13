<?php
namespace Model;
use Model\VO\MatriculaVO;

final class MatriculaModel extends Model {
    public function selectAll($vo) {
        $db = new Connection();
        $query = "SELECT m.*, d.nome AS disciplina, a.nome AS aluno FROM matriculas AS m JOIN alunos AS a ON a.id = m.idAluno JOIN disciplinas AS d ON d.id = m.idDisciplina;";
        $data = $db->select($query);
        $arrayDados = [];
        foreach ($data as $row) {
            array_push($arrayDados, new MatriculaVO($row["id"],$row["idDisciplina"],$row["idAluno"],$row["ano"],$row["disciplina"],$row["aluno"]));
        }
        return $arrayDados;
    }
    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM matriculas WHERE id=:id";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);
        return new MatriculaVO($data[0]["id"], $data[0]["idDisciplina"],$data[0]["idAluno"],$data[0]["ano"]);
    }
    public function insert($vo) {
        $db = new Connection();
        $query = "";
    }
    public function update($vo) {
        $db = new Connection();
        $query = "";
    }
    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM matriculas WHERE id = :id";
        $binds = ["id" => $vo->getId()];
        return $db->execute($query, $binds);
    }
}