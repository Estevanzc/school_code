<?php
// PDO instance
$pdo = new PDO("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// regsitry delete
$query = "DELETE FROM carros WHERE id=:id";
$statement = $pdo->prepare($query);
$statement->bindValue(":id", 1);
$success = $statement->execute();
print_r($success);