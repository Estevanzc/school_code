<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            justify-content: flex-start;
            align-self: flex-start;
            flex-flow: column;
        }
    </style>
</head>

<body>
    <form action="<?php echo (isset($_GET["id"]) ? "5.php?id=".$_GET["id"]."" : "3.php") ?>" method="post">
        <?php
        $id = isset($_GET["id"]) ? (int) $_GET["id"] : null;
        $carro = null;
        if ($id != null) {
            require_once("Connection.php");
            $db = new Connection();
            $carro = $db->select("SELECT * FROM carros WHERE id=:id", ["id" => $id]);
            $carro = $carro[0];
        }
        echo ("
        <label for=\"brand\">Brand</label>
        <input type=\"text\" id=\"marca\" name=\"marca\" placeholder=\"Car_Brand\" value=\"".($carro != null ? $carro[1] : "")."\">
        <label for=\"model\">Model</label>
        <input type=\"text\" id=\"modelo\" name=\"modelo\" placeholder=\"Car_Model\" value=\"".($carro != null ? $carro[2] : "")."\">
        <label for=\"ano\">Ano</label>
        <input type=\"number\" id=\"ano\" name=\"ano\" placeholder=\"Car_Ano\" value=\"".($carro != null ? $carro[3] : "")."\">
        <label for=\"placa\">Placa</label>
        <input type=\"text\" id=\"placa\" name=\"placa\" placeholder=\"Car_Placa\" value=\"".($carro != null ? $carro[4] : "")."\">
        <label for=\"cor\">Cor</label>
        <input type=\"text\" id=\"cor\" name=\"cor\" placeholder=\"Car_Cor\" value=\"".($carro != null ? $carro[5] : "")."\">
        ");
        ?>
        <button type="submit">Submit</button>
    </form>
</body>

</html>