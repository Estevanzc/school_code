<?php
// PDO instance
$pdo = new PDO("mysql:host=localhost;dbname=veiculos", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// registry selector
$query = "SELECT * FROM carros";
$statement = $pdo->prepare($query);
$statement->execute();
$carros = $statement->fetchAll();
echo("
<table border=2>
    <tr>
        <td>Id</td>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Ano</td>
        <td>Placa</td>
        <td>Cor</td>
    </tr>
    <tr>
");
foreach ($carros as $carro) {
    echo ("
    <td>$carro[0]</td>
    <td>$carro[1]</td>
    <td>$carro[2]</td>
    <td>$carro[3]</td>
    <td>$carro[4]</td>
    <td>$carro[5]</td>
    </tr>
    ");
}