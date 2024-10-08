<?php

namespace Model\VO;

final class UsuarioVO extends VO {

    private $login;
    private $senha;

    public function __construct($id = 0, $login = "", $senha = "") {
        parent::__construct($id);
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

}