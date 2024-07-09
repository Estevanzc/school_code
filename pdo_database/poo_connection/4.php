<?php
require_once("Connection.php");
$db = new Connection();
$return = $db->execute("DELETE FROM carros WHERE id=:id", ["id" => (int) $_GET["id"]]);
if ($return) {
    header("location: 1.php");
}