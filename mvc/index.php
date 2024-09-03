<?php
require_once("Connection_cfg.php");
require_once("vendor/autoload.php");
$disciplinaController = new Controller\DisciplinaController();
$disciplinaController->list();
$alunoController = new Controller\AlunoController();
$alunoController->list();
?>