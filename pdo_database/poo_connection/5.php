<?php
require_once("Connection.php");
$query = "UPDATE carros SET marca=:marca, modelo=:modelo, ano=:ano, placa=:placa, cor=:cor WHERE id=:id";
$db = new Connection();
$_POST["id"] = (int) $_GET["id"];
$success = $db->execute($query, $_POST);
if ($success) {
    header("location: 1.php");
}