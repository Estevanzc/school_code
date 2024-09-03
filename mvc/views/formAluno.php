<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <h1>Sistema Academico - Cadastro de Aluno</h1>
    <a href="index.php">Voltar à listagem</a>
    <form action="salvarAluno.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $aluno->getId();?>">
        <input type="text" name="nome" value="<?php echo $aluno->getNome();?>" placeholder="Nome:">
        <input type="text" name="matricula" value="<?php echo $aluno->getMatricula();?>" placeholder="Matricula:">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>