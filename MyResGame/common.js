var dark_mode_icons = ["fa-solid fa-moon","fa-solid fa-sun"]
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