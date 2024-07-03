<?php
// PDO instance
$pdo = new PDO("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// update construct
$query = "UPDATE carros SET cor=:cor, placa=:placa WHERE id=:id";
$statement = $pdo->prepare($query);
$statement->bindValue(":id", 2);
$statement->bindValue(":cor", "Branco");
$statement->bindValue(":placa", "PHP8223");
$success = $statement->execute();
print_r($success);