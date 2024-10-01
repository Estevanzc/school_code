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
                <p class="text-white text-2xl font-bold drop-shadow-2xl">Cadastro de Livros</p>
            </div>
            <div></div>
        </section>
        <section id="screen_middle" class="w-full flex justify-center items-center flex-col">
            <main class="mt-10 w-[60%] flex justify-center items-center flex-col">
                <form action="salvarLivro.php" method="POST" class="w-5/12 h-[500px] flex justify-center items-center flex-col bg-white rounded-lg shadow-2xl drop-shadow-2xl border-2 border-solid border-gray-300">
                    <input type="hidden" name="id" value="<?php echo $livro->getId();?>">
                    <div class="w-full h-1/5 flex justify-center items-start flex-col">
                        <label for="titulo" class="alert_label flex justify-center items-center gap-x-2 ml-7 drop-shadow-2xl">
                            <p class="font-bold text-cyan-700">Título do livro</p>
                            <p class="transition-all opacity-0 text-xs font-bold text-red-500">Mínimo de caracteres (8)</p>
                        </label>
                        <input type="text" name="titulo" id="titulo" data-min_char="8" value="<?php echo $livro->getTitulo();?>" placeholder="Exemplo: Máquina do Caos" class="submit_verifyer w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                    </div>
                    <div class="w-full h-1/5 flex justify-center items-center">
                        <div class="w-1/2 h-full flex justify-center items-center flex-col gap-y-1">
                            <label for="autores" class="alert_label flex justify-center items-center gap-x-2 drop-shadow-2xl">
                                <p class="font-bold text-cyan-700">Autor</p>
                                <p class="transition-all opacity-0 text-xs font-bold text-red-500">Min caracteres (8)</p>
                            </label>
                            <input type="text" name="autores" id="autores" data-min_char="8" value="<?php echo $livro->getAutores();?>" placeholder="Exemplo: Max Fisher" class="submit_verifyer w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                        <div class="w-1/2 h-full flex justify-center items-center flex-col gap-y-1">
                            <label for="data_nasc" class="alert_label flex justify-center items-center gap-x-2 drop-shadow-2xl">
                                <p class="font-bold text-cyan-700">Editora</p>
                                <p class="transition-all opacity-0 text-xs font-bold text-red-500">Min caracteres (8)</p>
                            </label>
                            <input type="text" name="editora" id="editora" data-min_char="8" value="<?php echo $livro->getEditora();?>" placeholder="Exemplo: Editora A" class="submit_verifyer w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                    </div>
                    <div class="w-full h-1/5 flex justify-center items-center">
                        <div class="w-1/2 h-full flex justify-center items-start flex-col gap-y-1">
                            <label for="ano" class="ml-5 font-bold text-cyan-700 drop-shadow-2xl">Ano de publicação</label>
                            <input type="text" name="ano" id="ano" data-number="1" value="<?php echo $livro->getAno();?>" placeholder="Exemplo: 2024" class="submit_verifyer w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                        <?php
                        $retiradas_num = 0;
                        foreach ($retiradas as $retirada) {
                            if ($retirada->getLivro_id() == $livro->getTitulo()) {
                                $retiradas_num ++;
                            }
                        }
                        ?>
                        <div class="w-1/2 h-full flex justify-center items-start flex-col gap-y-1">
                            <label for="data_nasc" class="ml-5 font-bold text-cyan-700 drop-shadow-2xl">Quantidade</label>
                            <input type="number" name="quantidade" id="quantidade" min="<?php echo ($retiradas_num == 0 ? 1 : $retiradas_num)?>" step="1" value="<?php echo $livro->getQuantidade();?>" placeholder="Exemplo: 10" class="submit_verifyer w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                        </div>
                    </div>
                    <div class="w-full h-1/5 flex justify-center items-start flex-col">
                        <label for="ISBN" class="ml-7 alert_label flex justify-center items-center gap-x-2 drop-shadow-2xl">
                            <p class="font-bold text-cyan-700">ISBN</p>
                            <p class="transition-all opacity-0 text-xs font-bold text-red-500">apenas números</p>
                        </label>
                        <input type="text" name="ISBN" id="ISBN" data-number="1" value="<?php echo $livro->getISBN();?>" class="submit_verifyer w-11/12 h-1/2 self-center px-2 rounded-md text-sm font-medium border-2 border-solid border-gray-300">
                    </div>
                    <div id="here" class="w-full h-1/5 flex justify-around items-end pb-4">
                        <a href="livros.php" class="w-1/3 h-[35px] flex justify-center items-center font-bold text-sm bg-[rgb(220,220,220)] rounded-md border-2 border-solid border-gray-300 cursor-pointer transition-all hover:bg-red-500 hover:text-white hover:border-0">Cancelar</a>
                        <button type="button" onclick="verifyer_caller(this)" class="w-1/3 h-[35px] flex justify-center items-center font-bold text-sm bg-[rgb(220,220,220)] rounded-md border-2 border-solid border-gray-300 cursor-pointer transition-all hover:bg-green-500 hover:text-white hover:border-0">Salvar</button>
                    </div>
                </form>
            </main>
        </section>
    </div>
    <script src="formVerifyer.js"></script>
</body>

</html>