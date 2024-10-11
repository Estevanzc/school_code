<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico - Cadastro de Usuario</h1>
    <a href="usuarios.php">Voltar para a listagem</a>
    <form action="salvarUsuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>">
        <input type="text" name="login" value="<?php echo $usuario->getLogin(); ?>" placeholder="Login:">
        <br>
        <input type="text" name="senha" placeholder="Senha:">
        <?php
        if (!empty($usuario->getId())) {
            ?>
            <br>
            <span>Para deixar a senha atual, basta deixar o o campo em branco</span>
            <?php
        }
        ?>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>