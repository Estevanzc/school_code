<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico - Alunos</h1>
    <a href="aluno.php">Incluir novo</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Ações</th>
        </tr>
        <?php foreach($alunos as $aluno) { ?>
            <tr>
                <td><?php echo $aluno->getId(); ?></td>
                <td><?php echo $aluno->getNome(); ?></td>
                <td><?php echo $aluno->getMatricula(); ?></td>
                <td>
                    <a href="aluno.php?id=<?php echo $aluno->getId(); ?>">Editar</a>
                    <br>
                    <a href="excluirAluno.php?id=<?php echo $aluno->getId(); ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>