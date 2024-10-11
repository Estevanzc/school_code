<?php

namespace Model;

use Model\VO\UsuarioVO;

final class UsuarioModel extends Model {

    public function selectAll($vo) {
        $db = new Connection();
        $query = "SELECT * FROM usuarios";
        $data = $db->select($query);

        $arrayDados = [];

        foreach($data as $row) {
            $vo = new UsuarioVO($row["id"], $row["login"], $row["senha"]);
            array_push($arrayDados, $vo);
        }

        return $arrayDados;
    }

    public function selectOne($vo) {
        $db = new Connection();
        $query = "SELECT * FROM usuarios WHERE id = :id";
        $binds = ["id" => $vo->getId()];
        $data = $db->select($query, $binds);

        return new UsuarioVO($data[0]["id"], $data[0]["login"], $data[0]["senha"]);
    }

    public function insert($vo) {
        $db = new Connection();
        $query = "INSERT INTO usuarios VALUES (default, :login, :senha)";
        $binds = ["login" => $vo->getLogin(), "senha" => md5($vo->getSenha())];

        return $db->execute($query, $binds);
    }

    public function update($vo) {
        $db = new Connection();
        if (empty($vo->getSenha())) {
            $query = "UPDATE usuarios SET login=:login WHERE id = :id";
            $binds = [
                "login" => $vo->getLogin(),
                "id" => $vo->getId()    
            ];
        } else {
            $query = "UPDATE usuarios SET login=:login, senha=:senha WHERE id = :id";
            $binds = [
                "login" => $vo->getLogin(),
                "senha" => md5($vo->getSenha()),
                "id" => $vo->getId()
            ];
        }
        return $db->execute($query, $binds);
    }

    public function delete($vo) {
        $db = new Connection();
        $query = "DELETE FROM usuarios WHERE id = :id";
        $binds = ["id" => $vo->getId()];

        return $db->execute($query, $binds);
    }
    public function doLogin($vo) {
        $db = new Connection();
        $query = "SELECT * FROM usuarios WHERE login=:login and senha=:senha";
        $binds = [
            "login" => $vo->getLogin(),
            "senha" => md5($vo->getSenha())
        ];
        $data = $db->select($query, $binds);
        if (count($data) == 0) {
            return null;
        }
        $_SESSION["usuario"] = new UsuarioVO($data[0]["id"],$data[0]["login"],$data[0]["senha"]);
        return $_SESSION["usuario"];
    }
}