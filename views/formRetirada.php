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
            <a href="alunos.php" class="w-56 h-14 flex justify-center items-center text-white cursor-pointer transition-all hover:bg-cyan-600 hover:shadow-2xl">
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
                <p class="text-white text-2xl font-bold drop-shadow-2xl">Cadastro de Retiradas</p>
            </div>
            <div></div>
        </section>
        <section id="screen_middle" class="w-full flex justify-center items-center flex-col">
            <main class="mt-10 w-[60%] flex justify-center items-center flex-col">
                <form action="salvarRetirada.php" method="POST" class="w-5/12 h-[400px] flex justify-center items-center flex-col bg-white rounded-lg shadow-2xl drop-shadow-2xl border-2 border-solid border-gray-300">
                    <input type="hidden" name="id">
                    <div class="w-full h-1/4 flex justify-center items-start flex-col">
                        <label for="aluno_id" class="ml-7 font-bold text-cyan-700 drop-shadow-2xl">Aluno</label>
                        <select name="aluno_id" id="aluno_id" class="w-11/12 h-[40%] self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                            <?php foreach ($alunos as $aluno) {?>
                                <option value="<?php echo $aluno->getId();?>"><?php echo $aluno->getNome();?></option>
                            <?php }?>
                        </select>
                    </div>
                    <?php
                    date_default_timezone_set("America/Sao_Paulo");
                    ?>
                    <div class="w-full h-1/4 flex justify-center items-start flex-col">
                        <label for="livro_id" class="ml-7 font-bold text-cyan-700 drop-shadow-2xl">Livro</label>
                        <select name="livro_id" id="livro_id" class="w-11/12 h-[40%] self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        <?php
                        foreach ($livros as $livro) {
                            $reserved = false;
                            $retiradas_num = 0;
                            foreach ($retiradas as $retirada) {
                                if ($retirada->getLivro_id() == $livro->getTitulo()) {
                                    $retiradas_num ++;
                                }
                            }
                            if ($livro->getQuantidade() - $retiradas_num > 0) {
                                ?>
                                <option value="<?php echo $livro->getId();?>"><?php echo $livro->getTitulo();?></option>
                                <?php
                            }
                        }
                        ?>
                        </select>
                    </div>
                    <div class="w-full h-1/4 flex justify-center items-start flex-col gap-y-1">
                        <input type="date" name="devolucao" id="devolucao" class="hidden" value="">
                        <div class="w-full h-4/5 flex justify-center items-start flex-col gap-x-1 text-sm">
                            <label for="aluno_id" class="ml-7 font-bold text-cyan-700 drop-shadow-2xl">Retirada</label>
                            <input type="date" name="retirada" onkeyup="devolucao_calc(this)" class="w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                        <div class="w-full h-1/5 flex justify-start items-end pl-5 gap-x-1 text-sm">
                            <p class="text-cyan-700 font-bold">Devolução:</p>
                            <p id="devolucao_p" class="font-medium text-xs"></p>
                        </div>
                    </div>
                    <div class="w-full h-1/4 flex justify-around items-end pb-4">
                        <a href="retiradas.php" class="w-1/3 h-[35px] flex justify-center items-center font-bold text-sm bg-[rgb(220,220,220)] rounded-md border-2 border-solid border-gray-300 cursor-pointer transition-all hover:bg-red-500 hover:text-white hover:border-0">Cancelar</a>
                        <button type="submit" class="w-1/3 h-[35px] flex justify-center items-center font-bold text-sm bg-[rgb(220,220,220)] rounded-md border-2 border-solid border-gray-300 cursor-pointer transition-all hover:bg-green-500 hover:text-white hover:border-0">Salvar</button>
                    </div>
                </form>
            </main>
        </section>
    </div>
    <script src="formVerifyer.js"></script>
    <script src="formRetirada.js"></script>
</body>

</html>