<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library SQL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="common.css">
</head>

<body>
    <div id="back_ground"
        class="absolute top-0 left-0 w-screen h-screen flex justify-start items-center flex-col bg-gradient-to-r from-cyan-500 to-blue-500 overflow-auto">
        <aside class="fixed z-10 w-14 h-full flex justify-start items-start overflow-hidden flex-col self-start transition-all hover:w-56 bg-cyan-700 drop-shadow-2xl shadow-2xl border-r-[3px] border-solid border-cyan-800">
            <div class="w-56 h-14 flex justify-center items-center text-white font-medium text-lg">
                <div class="w-3/5 h-full flex justify-center items-center">Menu</div>
            </div>
            <a href="index.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-house"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Home</div>
            </a>
            <a href="alunos.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all bg-cyan-600 shadow-2xl hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-user"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Alunos</div>
            </a>
            <a href="livros.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-book"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Livros</div>
            </a>
            <a href="retiradas.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
                <div class="w-[25%] h-full flex justify-center items-center text-xl"><i class="fa-solid fa-table-list"></i></div>
                <div class="w-[75%] h-full flex justify-center items-center font-medium text-lg">Retiradas</div>
            </a>
        </aside>
        <section id="screen_top" class="w-full h-20 grid grid-cols-3 grid-rows-1">
            <div class="flex justify-around items-center">
                <div class="w-52 h-full bg-center bg-cover bg-no-repeat bg-[url(imgs/logo.png)]"></div>
            </div>
            <div class="flex justify-center items-center">
                <p class="text-white text-2xl font-bold drop-shadow-2xl shadow-2xl">Lista de Alunos</p>
            </div>
            <div></div>
        </section>
        <section id="screen_middle" class="w-full flex justify-center items-center flex-col">
            <main class="mt-10 w-[60%] flex justify-center items-center flex-col gap-y-2.5 gap-x-2">
                <div class="w-full flex justify-end items-center">
                    <a href="aluno.php" class="py-1 px-5 bg-white font-medium cursor-pointer rounded-sm transition-all drop-shadow-2xl shadow-2xl hover:bg-[rgb(220,220,220)]">Inserir Aluno</a>
                </div>
                <table class="w-full rounded-sm drop-shadow-2xl shadow-2xl">
                    <tr class="h-9 bg-white">
                        <td class="w-[5%] text-center font-bold">ID</td>
                        <td class="w-[20%] pl-5 font-bold">Nome</td>
                        <td class="w-[15%] text-center font-bold">Data_nasc</td>
                        <td class="w-[15%] text-center font-bold">Curso</td>
                        <td class="w-[15%] text-center font-bold">Matricula</td>
                        <td class="w-[15%] text-center font-bold">Cpf</td>
                        <td class="w-[15%] text-center font-bold">Ações</td>
                    </tr>
                    <?php 
                    $count = 0;
                    foreach ($alunos as $aluno) {
                        $count ++;
                        ?>
                        <tr class="h-9 bg-[rgba(255,255,255,<?php echo ($count % 2 == 0 ? "0.5" : "0.3");?>)] transition-all hover:bg-[rgba(255,255,255,0.8)]">
                            <td class="text-center font-bold"><?php echo ($aluno->getId()) ?></td>
                            <td class="pl-5 text-sm"><?php echo ($aluno->getNome()) ?></td>
                            <td class="text-center text-sm"><?php echo ($aluno->getData_nasc()) ?></td>
                            <td class="text-center text-sm"><?php echo ($aluno->getCurso()) ?></td>
                            <td class="text-center text-sm"><?php echo ($aluno->getMatricula()) ?></td>
                            <td class="text-center text-sm"><?php echo ($aluno->getCpf()) ?></td>
                            <td class="flex justify-center items-center text-center">
                                <a href="aluno.php?id=<?php echo $aluno->getId(); ?>" class="grow h-9 flex justify-center items-center hover:text-blue-500 transition-all cursor-pointer drop-shadow-2xl shadow-2xl"><i class="fa-solid fa-pen"></i></a>
                                <a href="excluirAluno.php?id=<?php echo $aluno->getId(); ?>" class="grow h-9 flex justify-center items-center hover:text-red-500 transition-all cursor-pointer drop-shadow-2xl shadow-2xl"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </main>
        </section>
    </div>
</body>

</html>