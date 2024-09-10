<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h2>Matriculas</h2>
    <a href="matricula.php">Incluir nova</a>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Disciplina</td>
            <td>Aluno</td>
            <td>Ano</td>
            <td>Ações</td>
        </tr>
        <?php foreach ($matriculas as $matricula) {?>
        <tr>
            <td><?php echo ($matricula->getId())?></td>
            <td><?php echo ($matricula->getDisciplina())?></td>
            <td><?php echo ($matricula->getAluno())?></td>
            <td><?php echo ($matricula->getAno())?></td>
            <td>
                <a href="matricula.php?id=<?php echo $matricula->getId();?>">Editar</a>
                <br>
                <a href="excluirMatricula.php?id=<?php echo $matricula->getId();?>">Excluir</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>