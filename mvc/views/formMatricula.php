<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico - Matrículas</title>
</head>
<body>
    <h1>Sistema Acadêmico - Matrículas</h1>
    <a href="matriculas.php">Voltar</a>
    <form action="salvarMatricula.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $matricula->getId(); ?>">
        <label for="idDisciplina">Disciplina:</label><br>
        <select name="idDisciplina" id="idDisciplina">
            <?php foreach($disciplinas as $disciplina) { ?>
                <option value="<?php echo $disciplina->getId(); ?>"
                    <?php 
                        echo (
                            ($disciplina->getId() == $matricula->getIdDisciplina())
                            ? "selected" 
                            : ""
                        );
                    ?>
                >
                    <?php echo $disciplina->getNome(); ?>
                </option>
            <?php } ?>
        </select>
        <br>
        <label for="idAluno">Aluno:</label><br>
        <select name="idAluno" id="idAluno">
            <?php foreach($alunos as $aluno) { ?>
                <option value="<?php echo $aluno->getId(); ?>"
                    <?php 
                        echo (
                            ($aluno->getId() == $matricula->getIdAluno()) 
                            ? "selected" 
                            : ""
                        ); 
                    ?>
                >
                    <?php echo $aluno->getNome(); ?> 
                </option>
            <?php } ?>
        </select>
        <br>
        <label for="ano">Ano:</label><br>
        <input type="number" name="ano" id="ano" value="<?php echo $matricula->getAno(); ?>">
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>