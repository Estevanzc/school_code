<?php

namespace Model;

use Model\VO\MatriculaVO;

final class MatriculaModel extends Model {

    public function selectAll($vo) {
        $db = new Connection();

        $query = "SELECT m.*, d.nome AS disciplina, a.nome AS aluno  FROM matriculas m JOIN disciplinas d ON d.id = m.idDisciplina JOIN alunos a ON a.id = m.idAluno ";

        $data = $db->select($query);

        $arrayDados = [];

        foreach($data as $row) {
            $vo = new MatriculaVO($row["id"], $row["idDisciplina"], $row["idAluno"], $row["ano"], $row["disciplina"], $row["aluno"]);
            array_push($arrayDados, $vo);
        }

        return $arrayDados;
    }    

    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM matriculas WHERE id = :id";
        $binds = ["id" => $vo->getId()];

        $data = $db->select($query, $binds);

        return new MatriculaVO($data[0]["id"], $data[0]["idDisciplina"], $data[0]["idAluno"], $data[0]["ano"]);
    } 

    public function insert($vo) {
        $db = new Connection();
        $query = "INSERT INTO matriculas (idDisciplina, idAluno, ano) VALUES (:idDisciplina, :idAluno, :ano)";
        
        $binds = [
            "idDisciplina" => $vo->getIdDisciplina(),
            "idAluno" => $vo->getIdAluno(),
            "ano" => $vo->getAno()
        ];

        return $db->execute($query, $binds);
    }   

    public function update($vo) {
        $db = new Connection();
        $query = "UPDATE matriculas SET idDisciplina = :idDisciplina, idAluno = :idAluno, ano = :ano WHERE id = :id";

        $binds = [
            "idDisciplina" => $vo->getIdDisciplina(),
            "idAluno" => $vo->getIdAluno(),
            "ano" => $vo->getAno(),
            "id" => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }    

    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM matriculas WHERE id = :id";
        $binds = ["id" => $vo->getId()];

        return $db->execute($query, $binds);
    }        

}