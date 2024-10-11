<?php

namespace Controller;

abstract class Controller {
    public function __construct() {
        session_start();
        session_regenerate_id();
    }

    public function redirect($url) {
        header("Location: " . $url);
    }

    public function loadView($view, $data = []) {
        extract($data);
        include("views/" . $view . ".php");
    }

}