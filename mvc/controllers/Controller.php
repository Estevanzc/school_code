<?php

namespace Controller;

abstract class Controller {
    public function __construct($obriga_login = true) {
        session_start();
        session_regenerate_id();
        if ($obriga_login && !isset($_SESSION["usuario"])) {
            $this->redirect("login.php");
            exit();
        }
    }

    public function redirect($url) {
        header("Location: " . $url);
    }

    public function loadView($view, $data = []) {
        extract($data);
        include("views/" . $view . ".php");
    }

}