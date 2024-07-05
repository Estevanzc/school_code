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
    <!--Brand- Model-Ano-Placa-Cor-->
    <form action="3.php" method="post">
        <label for="brand">Brand</label>
        <input type="text" id="marca" name="marca" placeholder="Car_Brand">
        <label for="model">Model</label>
        <input type="text" id="modelo" name="modelo" placeholder="Car_Model">
        <label for="ano">Ano</label>
        <input type="number" id="ano" name="ano" placeholder="Car_Ano">
        <label for="placa">Placa</label>
        <input type="text" id="placa" name="placa" placeholder="Car_Placa">
        <label for="cor">Cor</label>
        <input type="text" id="cor" name="cor" placeholder="Car_Cor">
        <button type="submit">Submit</button>
    </form>
</body>
</html>