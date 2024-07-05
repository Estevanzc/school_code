<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de carros</h1>
    <a href="2.php">Add a car</a>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Ano</th>
                <th>Placa</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once("Connection.php");
                $db = new Connection();
                $return = $db->select("SELECT * FROM carros");
                foreach ($return as $carro) {
                    echo ("
                    <tr>
                        <td>$carro[0]</td>
                        <td>$carro[1]</td>
                        <td>$carro[2]</td>
                        <td>$carro[3]</td>
                        <td>$carro[4]</td>
                        <td>$carro[5]</td>
                    </tr>
                    ");
                }
            ?>
        </tbody>
    </table>
</body>
</html>