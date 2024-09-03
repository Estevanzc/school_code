<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h2>Alunos</h2>
    <a href="aluno.php">Incluir novo</a>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Matricula</td>
            <td>Ações</td>
        </tr>
        <?php foreach ($alunos as $aluno) {?>
        <tr>
            <td><?php echo ($aluno->getId())?></td>
            <td><?php echo ($aluno->getNome())?></td>
            <td><?php echo ($aluno->getMatricula())?></td>
            <td>
                <a href="aluno.php?id=<?php echo $aluno->getId();?>">Editar</a>
                <br>
                <a href="excluirAluno.php?id=<?php echo $aluno->getId();?>">Excluir</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>