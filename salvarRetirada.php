<?php
require_once("Connection_cfg.php");
require_once("vendor/autoload.php");
$controller = new Controller\RetiradaController();
$controller->save();
?>