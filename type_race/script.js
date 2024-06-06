var menu_screen = document.getElementById("menu_screen")
var main_screen = document.getElementById("main_screen")
var final_screen = document.getElementById("final_screen")
var menu_button = document.getElementById("menu_button")
var final_info = document.getElementById("final_info")
var final_clock = document.getElementById("final_clock")
var game_clock = document.getElementById("game_clock")
var clock_min = document.getElementById("clock_min")
var clock_sec = document.getElementById("clock_sec")
var clock_mil = document.getElementById("clock_mil")
var final_min = document.getElementById("final_min")
var final_sec = document.getElementById("final_sec")
var final_mil = document.getElementById("final_mil")
var type_input = document.getElementById("type_input")
var mw_word = document.getElementById("mw_word").children[0]
var md_left = document.getElementById("md_left")
var md_right = document.getElementById("md_right")
var past_word = document.getElementById("past_word")
var diffcult = 0
var past_words = []
var choosen_word = { word: 0, element: 0 }
var game_time = 0
var game_time_limit = 18000
var clock_interval
var game_mode = 0
var num = null
var modes = [
    {
        mode_name: "Radicais Gregos", mode_words: [
            { word: ["Aeronáutica", "aeródromo"], element: "aero" },
            { word: ["Andrógeno", "androfobia"], element: "andro" },
            { word: ["Bibliologia", "bibliográfico"], element: "biblio" },
            { word: ["Encéfalo", "acéfalo"], element: "cefalo" },
            { word: ["Cronologia", "crônico"], element: "crono" },
            { word: ["Democracia", "demografia"], element: "demo" },
            { word: ["Eneaedro", "eneagono"], element: "enea" },
            { word: ["Filosofia", "Filogenia"], element: "filo" },
            { word: ["Fótons", "fotoquímico"], element: "foto" },
            { word: ["Bibliografia", "monografia"], element: "grafia" },
            { word: ["Hemácia", "hemoglobina"], element: "hema" },
            { word: ["Isótopo", "isotônico"], element: "iso" },
            { word: ["Neortodoxia", "neolítico"], element: "neo" },
            { word: ["Polimorfia", "poliedro"], element: "poli" },
            { word: ["Teologia", "teofania"], element: "teo" },
        ]
    },
    {
        mode_name: "Radicais Latinos", mode_words: [
            { word: ["aviário", "aviação"], element: "avi" },
            { word: ["belicismo", "bélico"], element: "beli" },
            { word: ["Homicida", "homicídio"], element: "cida" },
            { word: ["Férrico", "aurífero"], element: "fero" },
            { word: ["Fraternidade", "Fraternal"], element: "frater" },
            { word: ["multifacetado", "multiplicado"], element: "multi" },
            { word: ["onicolor", "onisciente"], element: "oni" },
            { word: ["Quadrilátero"], element: "quadri" },
            { word: ["Herbivoro", "onivoro"], element: "voro" },
            { word: ["Umbra", "Penumbra"], element: "umbra" },
            { word: ["vermifugo"], element: "fugo" },
            { word: ["verminose", "vermiculita"], element: "vermi" },
            { word: ["Retículo", "retilíneo"], element: "reti" },
            { word: ["Trilogia"], element: "tri" },
            { word: ["arborismo"], element: "arbori" },
        ]
    },
    {
        mode_name: "Prefixos Gregos", mode_words: [
            { word: ["aliteral"], element: "a" },
            { word: ["Anarquia", "análogo", "análise"], element: "ana" },
            { word: ["Antissemita", "antípode", "antídoto"], element: "anti" },
            { word: ["Apóstolo", "apoptose", "apomorfia"], element: "apo" },
            { word: ["dipolo", "dicotomia", "dilema"], element: "di" },
            { word: ["endoscopia", "endócrino"], element: "endo" },
            { word: ["evangelho"], element: "ev" },
            { word: ["hipertrofia", "hipertermia"], element: "hiper" },
            { word: ["hipotermia"], element: "hipo" },
            { word: ["polimorfia", "polissemia", "polígono", "poliedro"], element: "poli" },
            { word: ["metamorfose", "metalinguagem", "metáfase", "metástase"], element: "meta" },
            { word: ["ultraje", "ultravioleta"], element: "ultra" },
            { word: ["síntese", "sintético", "sinestesia"], element: "sin" },
            { word: ["visconde"], element: "vis" },
            { word: ["parassíntese", "paráfrase"], element: "para" },
        ]
    },
    {
        mode_name: "Prefixos Latinos", mode_words: [
            { word: ["absinto", "absoluto"], element: "ab" },
            { word: ["antepassado", "antecipar"], element: "ante" },
            { word: ["bilateral"], element: "bi" },
            { word: ["circumcêntrico", "circuncidar"], element: "circum" },
            { word: ["exorbitar"], element: "ex" },
            { word: ["indigno", "iniquo"], element: "in" },
            { word: ["introdução", "introspectivo"], element: "intro" },
            { word: ["pré-protestante", "precursor"], element: "pré-" },
            { word: ["promover", "promulgar", "proletar", "proceder"], element: "pro" },
            { word: ["reintegrar", "retratar", "retardar"], element: "re" },
            { word: ["semicírculo"], element: "semi" },
            { word: ["retrógrado", "retroceder", "retrocesso"], element: "retro" },
            { word: ["subalterno", "subtítulo"], element: "sub" },
            { word: ["suprassumo"], element: "supra" },
            { word: ["dispensar"], element: "dis" },
        ]
    }
]
function open_menu(element) {
    if (element.id == "menu_start") {
        var select = element.parentNode.parentNode.children[1]
        game_mode = Number(select.children[0].children[1].value)
        diffcult = Number(select.children[1].children[1].value)
        md_right.children[0].innerHTML = `<strong>Dificuldade:</strong> ${diffcult}`
        md_right.children[1].innerHTML = `<strong>Modo:</strong> ${modes[game_mode].mode_name}`
        menu_screen.style.animation = "window_unshow 0.25s forwards"
        setTimeout(() => {
            menu_screen.style.zIndex = 0
            menu_screen.style.display = "none"
            main_screen.style.zIndex = 1
        }, 250);
    } else if (element.id == "menu_button") {
        menu_screen.style.zIndex = 1
        menu_screen.style.display = "flex"
        main_screen.style.zIndex = 0
        menu_screen.style.animation = "window_show 0.25s forwards"
    } else {
        console.log("here")
        final_clock.style.animation = ""
        final_screen.style.animation = "window_unshow 0.25s forwards"
        setTimeout(() => {
            final_screen.style.zIndex = 0
            final_screen.style.display = "none"
            if (element.id == "final_menu") {
                menu_screen.style.zIndex = 1
                menu_screen.style.display = "flex"
                menu_screen.style.animation = "window_show 0.25s forwards"
            } else {
                main_screen.style.zIndex = 1
            }
            start_game(document.getElementById("restart_button"))
        }, 250);
    }
}
function word_random() {
    if (past_words.length - 1 < 13) {
        if (num != null) {
            past_words.push([choosen_word.word, num])
        }
        num = Math.floor(Math.random() * 15)
        while (past_words.some(function (word) { return num == word[1] })) {
            num = Math.floor(Math.random() * 15)
        }
        var choosen = modes[game_mode].mode_words[num]
        console.log(choosen)
        choosen_word.element = choosen.element
        choosen_word.word = choosen.word.length - 1 == 0 ? choosen.word[0] : choosen.word[Math.floor(Math.random() * Number(choosen.word.length))];
    } else {
        clearInterval(clock_interval)
        game_clock.style.animation = ""
        main_screen.style.zIndex = 0
        final_screen.style.zIndex = 1
        final_screen.style.display = "flex"
        final_screen.style.animation = "window_show 0.25s forwards"
        final_info.innerHTML = `Parabéns! Você acertou [${past_words.length}/14] <strong>${modes[game_mode].mode_name}</strong>`
        final_min.innerHTML = clock_min.innerHTML
        final_sec.innerHTML = clock_sec.innerHTML
        final_mil.innerHTML = clock_mil.innerHTML
    }
}
function word_switch() {
    word_random()
    type_input.value = ""
    mw_word.innerHTML = choosen_word.word
    md_left.children[0].innerHTML = `<strong>Consoantes:</strong> ${letter_counter(false, choosen_word.word)}`
    md_left.children[1].innerHTML = `<strong>Vogais:</strong> ${letter_counter(true, choosen_word.word)}`
    for (var i = Number(past_words.length - 1), child_num = 0; i >= (Number(past_words.lengtha - 1) > 9 ? Number(past_words.lengtha - 11) : 0); i--, child_num++) {
        past_word.children[child_num].innerHTML = past_words[i][0]
        past_word.children[child_num].style.display = "flex"
        past_word.children[child_num].style.opacity = 1
        past_word.children[child_num].style.opacity = Number((past_word.children[child_num].style.opacity == '' ? 1 : past_word.children[child_num].style.opacity)) - 0.07
        console.log(i)
    }
    type_input.focus()
}
function word_type(element, event) {
    if (event.key == "Enter") {
        console.log(element.value)
        if (element.value == choosen_word.element) {
            word_switch()
            element.classList.remove("wrong_word")
        } else {
            element.classList.add("wrong_word")
        }
    }
}
function letter_counter(mode, word) {
    var letter_num = 0
    for (var i = 0; i <= word.length - 1; i++) {
        switch (word[i]) {
            case 'a':
                letter_num += mode ? 1 : 0
                break
            case 'e':
                letter_num += mode ? 1 : 0
                break
            case 'i':
                letter_num += mode ? 1 : 0
                break
            case 'o':
                letter_num += mode ? 1 : 0
                break
            case 'u':
                letter_num += mode ? 1 : 0
                break
            default:
                letter_num += !mode ? 1 : 0
        }
    }
    return letter_num
}
function start_game(element) {
    if (element.id == "start_button") {
        element.id = "restart_button"
        element.innerHTML = "Recomeçar"/////////////////////////
        menu_button.style.display = "none"
        rank_button.style.display = "none"
        game_time_limit = diffcult * 100
        game_time = 0
        type_input.disabled = false
        word_switch()
        clock_interval = setInterval(() => {
            clock()
        }, 10);
    } else {
        clearInterval(clock_interval)
        num = null
        choosen_word = { word: 0, element: 0 }
        past_words = []
        type_input.disabled = true
        type_input.value = ""
        type_input.classList.remove("wrong_word")
        md_left.children[0].innerHTML = `<strong>Consoantes:</strong> 00`
        md_left.children[1].innerHTML = `<strong>Vogais:</strong> 00`
        mw_word.innerHTML = "Clique em começar"
        for (var i = 0; i <= Number(past_word.children.length - 1); i++) {
            past_word.children[i].innerHTML = ""
            past_word.children[i].style.display = "none"
            past_word.children[i].style.opacity = 1
        }
        clock_min.innerHTML = `00`
        clock_sec.innerHTML = `00`
        clock_mil.innerHTML = `00`
        element.id = "start_button"
        element.innerHTML = "Começar"
        menu_button.style.display = "flex"
        rank_button.style.display = "flex"
    }
}
function clock() {
    if (game_time <= game_time_limit) {
        var time = game_time
        var min = Number.parseInt((time / 100) / 60)
        time = time - (min * 60 * 100)
        var sec = Number.parseInt(time / 100)
        if (diffcult - sec == diffcult / 2) {
            game_clock.style.animation = "clock 0.5s infinite"
        }
        time = time - (sec * 100)
        var mil = time
        game_time++
        clock_min.innerHTML = min <= 9 ? `0${min}` : min
        clock_sec.innerHTML = sec <= 9 ? `0${sec}` : sec
        clock_mil.innerHTML = mil <= 9 ? `0${mil}` : mil
    } else {
        clearInterval(clock_interval)
        game_clock.style.animation = ""
        main_screen.style.zIndex = 0
        final_screen.style.zIndex = 1
        final_screen.style.display = "flex"
        final_screen.style.animation = "window_show 0.25s forwards"
        final_clock.style.animation = "final_clock 0.5s infinite"
        final_info.innerHTML = "<strong>Tempo acabou!</strong>"
        final_min.innerHTML = clock_min.innerHTML
        final_sec.innerHTML = clock_sec.innerHTML
        final_mil.innerHTML = clock_mil.innerHTML
    }
}
