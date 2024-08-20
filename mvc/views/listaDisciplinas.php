<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico - Disciplinas</h1>
    <a href="disciplina.php">Incluir nova</a>
    <table border="2">
        <thead>
            <th>
                <td>ID</td>
                <td>Nome</td>
                <td>Ações</td>
            </th>
        </thead>
        <tbody>
            <?php foreach ($disciplinas as $disciplina) {?>
            <tr>
                <td><?php echo ($disciplina->getId())?></td>
                <td><?php echo ($disciplina->getNome())?></td>
                <td>
                    <a href="disciplina.php?id=<?php echo $disciplina->getId();?>">Editar</a>
                    <br>
                    <a href="*">Excluir</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>