var dark_mode_icons = ["fa-solid fa-moon", "fa-solid fa-sun"]
var body = document.getElementsByTagName("body")[0]
/*
--main-color
--main-menu-color
--menu-button-hover-color
--menu-button-active-color
--secondary-menu-color
--button-color
--button-hover-color
--button-active-color
--secondary1-color
--title-color
--shadow-color
--shadow1-color
*/
var dark_mode_colors = {
    color_names: ["--main-color", "--main-menu-color", "--menu-button-hover-color", "--menu-button-active-color", "--secondary-menu-color", "--button-color", "--button-hover-color", "--button-active-color", "--secondary1-color", "--title-color", "--shadow-color", "--shadow1-color", "--border-color"],
    light: ["#0449C8", "#364d78", "#436095", "#5072B1", "#30569D", "#1F58C1", "#1a4ba5", "#2466E0", "#2d3175", "#323e54", "#252a33", "#2d2f33", "rgb(220, 220, 220)"],
    dark: ["black", "black", "black", "black", "black", "black", "black", "black", "black", "black", "black", "black", "black"]
}
function dark_mode(element) {
    if (element.dataset.dark_mode == 0) {
        element.dataset.dark_mode = 1
        element.children[0].className = "fa-solid fa-sun"
        for (var i in dark_mode_colors.color_names) {
            document.documentElement.style.setProperty(dark_mode_colors.color_names[i], dark_mode_colors.dark[i])
        }
    } else {
        element.dataset.dark_mode = 0
        element.children[0].className = "fa-solid fa-moon"
    }
}
//new_tag
function news_creater() {
    if (body.dataset.page_type == 0) {
        var first_new = document.getElementById("first_new")
        var nl_link = document.getElementsByClassName("nl_link")
        var main_news = document.getElementById("main_news").children[1]
        /* first_new */
        first_new.setAttribute("href", `post.php?post_num=0`)
        first_new.children[0].children[0].setAttribute("src", posts[0].imgs[0])
        first_new.children[1].children[0].innerHTML = posts[0].title
        first_new.children[1].children[1].children[0].innerHTML = posts[0].texts[0]
        var p0 = document.createElement("p")
        var p1 = document.createElement("p")
        p0.innerHTML = `#${posts[0].tags[0]}`
        p1.innerHTML = `#${posts[0].tags[1]}`
        first_new.children[1].children[2].children[0].appendChild(p0)
        first_new.children[1].children[2].children[0].appendChild(p1)
        first_new.children[1].children[2].children[1].children[0].innerHTML = `${posts[0].date.substring(8, 10)}/${posts[0].date.substring(5, 7)}/${posts[0].date.substring(0, 4)}`

        /* main_news */
        main_news.children[1].children[0].setAttribute("src", posts[1].imgs[0])
        main_news.children[1].children[1].setAttribute("src", posts[1].imgs[1])
        for (var i = 0; i <= Number(main_news.children[0].children.length - 1); i++) {
            main_new = main_news.children[0].children[i]
            main_new.setAttribute("href", `post.php?post_num=${i + 1}`)
            main_new.children[0].children[0].setAttribute("src", posts[i + 1].imgs[0])
            main_new.children[1].children[0].innerHTML = posts[i + 1].title
        }

        /* news_list */
        for (var i = 0; i <= Number(nl_link.length - 1); i++) {
            var post_num = i + 1 + Number(main_news.children[0].children.length - 1)
            nl_link[i].setAttribute("href", `post.php?post_num=${post_num}`)
            nl_link[i].children[0].children[0].setAttribute("src", posts[post_num].imgs[0])
            nl_link[0].children[1].children[0].innerHTML = posts[post_num].title
            nl_link[0].children[1].children[1].children[0].innerHTML = posts[post_num].texts[0]
            var p0 = document.createElement("p")
            var p1 = document.createElement("p")
            p0.innerHTML = `#${posts[post_num].tags[0]}`
            p1.innerHTML = `#${posts[post_num].tags[1]}`
            nl_link[i].children[1].children[2].children[0].appendChild(p0)
            nl_link[i].children[1].children[2].children[0].appendChild(p1)
            nl_link[i].children[1].children[2].children[1].children[0].innerHTML = `${posts[i].date.substring(8, 10)}/${posts[i].date.substring(5, 7)}/${posts[i].date.substring(0, 4)}`
        }
    } else {
        var nl_link = document.getElementsByClassName("nl_link")
        var month_name = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"]
        var post_num = Number(body.dataset.post_num)
        var post = posts[post_num]
        var main = document.getElementsByTagName("main")[0]
        main.children[0].innerHTML = post.title
        main.children[1].children[0].innerHTML = `${Number(post.date.substring(8, 10))} de ${month_name[Number(post.date.substring(5, 7))]} de ${post.date.substring(0, 4)}`
        main.children[1].children[2].innerHTML = post.author
        main.children[2].children[0].setAttribute("src", post.imgs[0])
        main.children[3].children[0].innerHTML = post.texts[0]
        main.children[4].children[0].setAttribute("src", post.imgs[1])
        main.children[5].children[0].innerHTML = post.texts[1]
        
        /* news_list */
        for (var i = 0; i <= Number(nl_link.length - 1); i++) {
            if (i != post_num) {
                var post_num = i
                nl_link[i].setAttribute("href", `post.php?post_num=${post_num}`)
                nl_link[i].children[0].children[0].setAttribute("src", posts[post_num].imgs[0])
                nl_link[0].children[1].children[0].innerHTML = posts[post_num].title
                nl_link[0].children[1].children[1].children[0].innerHTML = posts[post_num].texts[0]
                var p0 = document.createElement("p")
                var p1 = document.createElement("p")
                p0.innerHTML = `#${posts[post_num].tags[0]}`
                p1.innerHTML = `#${posts[post_num].tags[1]}`
                nl_link[i].children[1].children[2].children[0].appendChild(p0)
                nl_link[i].children[1].children[2].children[0].appendChild(p1)
                nl_link[i].children[1].children[2].children[1].children[0].innerHTML = `${posts[i].date.substring(8, 10)}/${posts[i].date.substring(5, 7)}/${posts[i].date.substring(0, 4)}`
            }
        }
    }
}
news_creater()
