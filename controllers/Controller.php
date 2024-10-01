<?php

namespace Controller;

abstract class Controller {

    public function redirect ($url) {
        header("Location: $url");
    }

    public function loadView($view, $data = []) {
        /*
        $data = ['nome' => 'Eduardo', 'idade' => 28]
        extract:
        $nome = 'Eduardo';
        $idade = 28;
        */
        extract($data);
        include("views/$view.php");
    }
}