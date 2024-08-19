<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
$ambient_num = (int) $_GET["ambient_num"];
$element_num = (int) $_GET["element_num"];
?>

<body <?php echo("data-ambient_num=\"".$ambient_num."\" data-element_num=\"".$element_num."\"")?> class="p-0 m-0 font-sans">
    <section id="first_screen"
        class="z-0 absolute w-screen h-screen flex justify-start items-center flex-col overflow-auto bg-center bg-no-repeat bg-cover bg-[url(https://www.hermanmiller.com/content/dam/hmicom/page_assets/home/image_text/it_home_government_20191106.jpg)]">
        <header
            class="z-10 fixed w-full h-14 flex justify-evenly items-center text-white bg-[#394B5E] shadow-md drop-shadow-md">
            <div class="w-3/12 h-full flex justify-center items-center">
                <a href="index.html" class="flex justify-center items-center gap-x-3 cursor-pointer">
                    <div class="text-3xl font-bold">TI</div>
                    <div class="text-2xl">|</div>
                    <div class="text-xl font-bold">Tailloja</div>
                </a>
            </div>
            <div class="w-5/12 h-full flex justify-center items-center gap-x-3">
                <a href="index.html"
                    class="py-1 flex justify-center items-center transition-all opacity-50 hover:opacity-100 active:opacity-60 cursor-pointer">
                    <div class="px-2 h-full flex justify-center items-center font-bold">Home</div>
                </a>
                <a href="about.html"
                    class="py-1 flex justify-center items-center transition-all opacity-50 hover:opacity-100 active:opacity-60 cursor-pointer">
                    <div class="px-2 h-full flex justify-center items-center font-bold">Sobre nós</div>
                </a>
                <a href="products.html"
                    class="py-1 flex justify-center items-center transition-all opacity-50 hover:opacity-100 active:opacity-60 cursor-pointer">
                    <div class="px-2 h-full flex justify-center items-center font-bold">Nosso Acervo</div>
                </a>
            </div>
            <div class="w-3/12 h-full flex justify-center items-center gap-x-3">
                <div
                    class="w-10 h-10 flex justify-center items-center bg-white text-[#394B5E] text-xl rounded-3xl shadow-md drop-shadow-md border-2 border-solid border-gray-500 transition-all cursor-pointer active:bg-[#394B5E]">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div
                    class="w-6/12 h-10 flex justify-center items-center bg-white rounded-3xl shadow-md drop-shadow-md border-2 border-solid border-gray-500 transition-all cursor-pointer active:bg-[#394B5E]">
                    <div class="w-3/12 h-full flex justify-center items-center">
                        <div
                            class="w-8 h-8 rounded-full shadow-md drop-shadow-md bg-center bg-no-repeat bg-cover bg-[url(https://img.freepik.com/premium-photo/duck-is-standing-white-background-with-white-background_867452-8708.jpg)]">
                        </div>
                    </div>
                    <div class="w-6/12 h-full flex justify-center items-center text-[#394B5E] drop-shadow-md font-bold">
                        Seu Perfil
                    </div>
                    <div class="w-3/12 h-full flex justify-center items-center">
                        <div class="w-6 h-6 flex justify-center items-center rounded-full bg-[#394B5E]">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="w-full flex justify-center items-center">
            <div class="w-full h-full flex justify-center items-center flex-col pt-14 bg-[rgba(57,75,94,0.75)]">
                <div class="w-full flex justify-center items-center flex-col px-10 py-10 bg-gray-100">
                    <div class="w-full h-14 flex justify-start items-center">
                        <a id="return_link" class="w-9 h-9 flex justify-center items-center rounded-full text-lg text-[#6E93B5] drop-shadow-md shadow-md cursor-pointer transition-all hover:border-0 hover:bg-[#6E93B5] hover:border-gray-300 hover:text-white active:border-4 border-[3px] border-solid border-[#6E93B5]"><i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                    <div class="w-full min-h-[500px] flex justify-center items-start py-2.5 px-44">
                        <div class="w-7/12 h-[500px] flex justify-center items-center">
                            <div id="main_setter" class="w-1/6 h-full flex justify-evenly items-center flex-col">
                            </div>
                            <div class="w-full h-full flex justify-center items-center">
                                <div id="main_carousel" class="w-11/12 h-5/6 flex justify-center items-center overflow-hidden rounded-lg border-2 border-solid border-gray-400 drop-shadow-md shadow-md transition-all bg-center bg-cover bg-no-repeat">
                                </div>
                            </div>
                        </div>
                        <div class="w-5/12 h-full flex justify-center items-center flex-col">
                            <div class="main_element w-full text-xl text-[#6E93B5] font-semibold drop-shadow-md">Mouse Gamer Logitech G403 HERO com RGB LIGHTSYNC, 6 Botões Programáveis, Ajuste de Peso e Sensor HERO 25K</div>
                            <div class="w-full h-10 flex justify-center items-center">
                                <div class="main_element w-3/6 h-full flex justify-start items-center gap-x-2">
                                    <p class="font-semibold">5.0</p>
                                    <div class="text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="w-3/6 h-full flex justify-center items-center">
                                    <div class="flex justify-center items-end gap-x-2">
                                        <p class="font-bold">Material:</p>
                                        <p class="main_element text-sm font-semibold">MDP/MDF</p>
                                    </div>
                                </div>
                            </div>
                            <div class="main_element w-full py-5 indent-10 text-sm font-semibold drop-shadow-md">A Cozinha Modulada Completa 10 portas 2 gavetas com paneleiro duplo micro-ondas é uma composição elegante que esbanja praticidade. Produto com portas almofadadas/molduradas em MDF inspirada nas clássicas cozinhas americanas. São 4 peças: paneleiro duplo, aéreo triplo, aéreo geladeira, balcão 1,20m com tampo. Amplo espaço interno, paneleiro para micro-ondas com 2 portas molduradas com vidro transparente, prateleiras no paneleiro, aéreo triplo e balcão, balcão c/ tampo para pia de 1,20x0,50m, gavetas com corrediças telescópicas, dobradiças reforçadas de 35mm, aéreo 1 porta basculante com pistão a gás que pode ser usado sobre geladeira ou fogão, puxadores modelo retro em polímero, pés em PVC 14,5cm reguláveis e rodapés removíveis com presilhas modelo click. Qualidade que só a Poliman oferece.</div>
                            <div class="w-full py-2 text-base font-bold">Provedores:</div>
                            <div class="main_element w-full flex justify-start items-center flex-wrap gap-x-8 gap-y-2">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center items-center flex-col px-24">
                        <div class="w-full py-4 flex justify-start items-center">
                            <p class="drop-shadow-md text-lg font-bold">Continue navegando pelo acervo:</p>
                        </div>
                        <div id="element_list" class="w-full flex justify-start items-center flex-wrap gap-x-5 gap-y-2">
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer
            class="w-full h-64 flex justify-center items-center bg-[#2B323A] border-t-2 border-solid border-gray-500">
            <div class="w-2/6 h-64 flex justify-center items-center flex-col">
                <div class="w-full h-2/6 flex justify-start items-center pl-10 text-white font-bold">
                    <a href="about.html" class="flex justify-center items-end">
                        <div class="text-4xl text-[#2374CB]">Tail</div>
                        <div class="text-4xl">loja</div>
                        <div class="self-start text-xl">© 2024</div>
                    </a>
                </div>
                <div class="w-full h-4/6 flex justify-evenly items-center flex-col text-white font-bold">
                    <div class="w-full flex justify-start items-center pl-10 gap-x-3">
                        <i class="fa-solid fa-phone text-lg text-[#2374CB]"></i>
                        <p class="transition-all cursor-pointer hover:text-[#2374CB]">+ 55 (54) 12345678</p>
                    </div>
                    <div class="w-full flex justify-start items-center pl-10 gap-x-3">
                        <i class="fa-solid fa-phone text-lg text-[#2374CB]"></i>
                        <p class="transition-all cursor-pointer hover:text-[#2374CB]">+ 55 (54) 12345678</p>
                    </div>
                    <div class="w-full flex justify-start items-center pl-10 gap-x-3">
                        <i class="fa-brands fa-whatsapp text-lg text-[#2374CB]"></i>
                        <p class="transition-all cursor-pointer hover:text-[#2374CB]">+ 55 (54) 12345678</p>
                    </div>
                    <div class="w-full flex justify-start items-center pl-10 gap-x-3">
                        <i class="fa-brands fa-whatsapp text-lg text-[#2374CB]"></i>
                        <p class="transition-all cursor-pointer hover:text-[#2374CB]">+ 55 (54) 12345678</p>
                    </div>
                    <div class="w-full grow flex justify-evenly items-center text-2xl">
                        <a href=""><i
                                class="fa-brands fa-instagram transition-all cursor-pointer hover:text-[#2374CB]"></i></a>
                        <a href=""><i
                                class="fa-brands fa-youtube transition-all cursor-pointer hover:text-[#2374CB]"></i></a>
                        <a href=""><i
                                class="fa-brands fa-github transition-all cursor-pointer hover:text-[#2374CB]"></i></a>
                        <a href=""><i
                                class="fa-brands fa-x-twitter transition-all cursor-pointer hover:text-[#2374CB]"></i></a>
                        <a href=""><i
                                class="fa-brands fa-linkedin transition-all cursor-pointer hover:text-[#2374CB]"></i></a>
                    </div>
                </div>
            </div>
            <div class="w-2/6 h-64 flex justify-start items-start flex-col gap-y-3 pt-9 text-white">
                <p class="font-bold">Menu:</p>
                <a href="index.html"
                    class="mt-3 font-medium transition-all cursor-pointer hover:text-[#2374CB] hover:drop-shadow-md">Home</a>
                <a href="about.html"
                    class="font-medium transition-all cursor-pointer hover:text-[#2374CB] hover:drop-shadow-md">Sobre
                    nós</a>
                <a href="products.html"
                    class="font-medium transition-all cursor-pointer hover:text-[#2374CB] hover:drop-shadow-md">Nossos
                    Produtos</a>
            </div>
            <div class="w-2/6 h-64 flex justify-center items-center flex-col pt-7 pb-2 gap-y-7 text-white">
                <div class="w-full flex justify-center items-center font-bold">
                    <div class="w-2/12 h-full flex justify-end items-start text-lg text-[#2374CB]">
                        <i class="fa-solid fa-location-dot mt-1 mr-4"></i>
                    </div>
                    <div class="w-10/12 h-full flex justify-start items-start flex-col gap-y-2 text-sm">
                        <p>Avenida Osvaldo Aranha, 540 - Bairro Juventude da Enologia - CEP: 95700-206</p>
                        <p>Bento Gonçalves/RS - Brasil</p>
                        <p>Tail Loja Indústria de Móveis Ltda.</p>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center">
                    <div class="w-2/12 flex justify-end items-center text-2xl text-[#2374CB]">
                        <i class="fa-regular fa-clock mr-4"></i>
                    </div>
                    <div class="w-10/12 flex justify-center items-start flex-col text-sm">
                        <p class="font-bold">Horário de atendimento</p>
                        <p class="font-semibold">Segunda a Sexta: 07:00h às 11:48h / 13:00h às 17:00h.</p>
                    </div>
                </div>
                <div class="w-full h-3/6 flex justify-center items-end text-sm font-medium">
                    <p>© 2024 Tail Loja Indústria de Móveis Ltda. Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>
    </section>
    <section id="second_screen" class="z-0 absolute w-screen h-screen hidden justify-center items-center"></section>
    <script src="elements_arm.js"></script>
    <script src="element.js"></script>
</body>

</html>