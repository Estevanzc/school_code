<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico - Matrículas</title>
</head>
<body>
    <h1>Sistema Acadêmico - Matrículas</h1>
    <a href="matricula.php">Inserir nova</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Disciplina</th>
            <th>Aluno</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
        <?php foreach($matriculas as $matricula) { ?>
            <tr>
                <td><?php echo $matricula->getId(); ?></td>
                <td><?php echo $matricula->getDisciplina(); ?></td>
                <td><?php echo $matricula->getAluno(); ?></td>
                <td><?php echo $matricula->getAno(); ?></td>
                <td>
                    <a href="matricula.php?id=<?php echo $matricula->getId(); ?>">Editar</a>
                    <br>
                    <a href="excluirMatricula.php?id=<?php echo $matricula->getId(); ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>