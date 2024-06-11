<?php
require_once("Request.php");
$cep = $_POST["cep"] ?? 400;
$request = new Request($cep);
print_r($request->execute());
?>