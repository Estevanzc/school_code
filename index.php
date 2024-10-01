<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library SQL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="common.css">
</head>
<body>
    <div id="back_ground" class="absolute top-0 left-0 w-screen h-screen grid grid-cols-1 grid-rows-5 bg-gradient-to-r from-cyan-500 to-blue-500">
        <section id="screen_top" class="row-start-1 row-end-2">
            <div class="mt-5 ml-5 w-72 h-24 bg-center bg-cover bg-no-repeat bg-[url(imgs/logo.png)]"></div>
        </section>
        <section id="screen_middle" class="row-start-2 row-end-5 flex justify-center items-center">
            <main class="w-[40%] h-56 flex justify-center items-center flex-col gap-y-10">
                <p class="text-white font-bold text-xl drop-shadow-2xl shadow-2xl">Selecione a tabela que deseja observar</p>
                <div class="flex justify-center items-center gap-x-2 font-bold">
                    <a href="alunos.php" class="w-40 h-12 flex justify-center items-center bg-white rounded-lg gap-x-2 drop-shadow-2xl shadow-2xl cursor-pointer transition-all hover:translate-y-[-5px] hover:bg-[rgb(230,230,230)] active:bg-[rgb(200,200,200)]">
                        <i class="fa-solid fa-user"></i>
                        <p>Alunos</p>
                    </a>
                    <a href="livros.php" class="w-40 h-12 flex justify-center items-center bg-white rounded-lg gap-x-2 drop-shadow-2xl shadow-2xl cursor-pointer transition-all hover:translate-y-[-5px] hover:bg-[rgb(230,230,230)] active:bg-[rgb(200,200,200)]">
                        <i class="fa-solid fa-book"></i>
                        <p>Livros</p>
                    </a>
                    <a href="retiradas.php" class="w-40 h-12 flex justify-center items-center bg-white rounded-lg gap-x-2 drop-shadow-2xl shadow-2xl cursor-pointer transition-all hover:translate-y-[-5px] hover:bg-[rgb(230,230,230)] active:bg-[rgb(200,200,200)]">
                        <i class="fa-solid fa-table-list"></i>
                        <p>Retiradas</p>
                    </a>
                </div>
            </main>
        </section>
        <section id="screen_bottom" class="row-start-5 row-end-6"></section>
    </div>
</body>
</html>