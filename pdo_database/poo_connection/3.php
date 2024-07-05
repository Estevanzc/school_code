<?php
require_once("Connection.php");
$query = "INSERT INTO carros VALUES (default, :marca, :modelo, :ano, :placa, :cor)";
$db = new Connection();
$db->execute($query, $_POST);
if ($success) {
    header("location: 1.php");
    exit();
} else {
    echo ("Insert fail");
}