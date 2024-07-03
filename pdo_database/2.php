<?php
// PDO instance
$pdo = new PDO("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// db insert
$query = "INSERT INTO carros VALUES (default, :marca, :modelo, :ano, :placa, :cor)";
$statement = $pdo->prepare($query);

// query values
$statement->bindValue(":marca", "Wolkswagen");
$statement->bindValue(":modelo", "Fusca");
$statement->bindValue(":ano", "1990");
$statement->bindValue(":placa", "XYZ9999");
$statement->bindValue(":cor", "Azul");
$success = $statement->execute();
if ($success) {
    echo ("Insert success from id => ". $pdo->lastInsertId());
} else {
    echo ("Insert fail");
}
