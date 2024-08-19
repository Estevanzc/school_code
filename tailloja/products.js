var desc_timeout
function show_desc(element) {
    element.children[0].classList.add("opacity-100")
    desc_timeout = setTimeout(() => {
        element.children[0].children[0].classList.remove("mb-[-100px]")
    }, 150);
}
function unshow_desc(element) {
    clearTimeout(desc_timeout)
    element.children[0].children[0].classList.add("mb-[-100px]")
    desc_timeout = setTimeout(() => {
        element.children[0].classList.remove("opacity-100")
    }, 150);
}
