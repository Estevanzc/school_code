<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico - Cadastro de Disciplina</h1>
    <a href="index.php">Voltar para a listagem</a>
    <form action="salvarDisciplina.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $disciplina->getId(); ?>">
        <input type="text" name="nome" value="<?php echo $disciplina->getNome(); ?>" placeholder="Nome:">
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>