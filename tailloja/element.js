var main_carousel = document.getElementById("main_carousel")
var element_list = document.getElementById("element_list")
var main_setters = document.getElementById("main_setter")
var main_element = document.getElementsByClassName("main_element")
var ambient_num = Number(document.getElementsByTagName("body")[0].dataset.ambient_num)
var element_num = Number(document.getElementsByTagName("body")[0].dataset.element_num)
var ambient_name = ["kitchen","bedroom","office","livingroom","loudryroom","bathroom"][ambient_num]
var elements_list = elements_data[ambient_num]
document.getElementById("return_link").setAttribute("href", `${ambient_name}.html`)
for (var i in elements_list) {
    var a = document.createElement("a")
    var div0 = document.createElement("div")
    var div1 = document.createElement("div")
    var div2 = document.createElement("div")
    var div3 = document.createElement("div")
    var p0 = document.createElement("p")
    var p1 = document.createElement("p")
    a.dataset.user_redirect = `element.php?ambient_num=${ambient_num}&element_num=${i}`
    a.addEventListener("mouseenter", function() {
        show_desc(this)
    })
    a.addEventListener("mouseleave", function() {
        unshow_desc(this)
    })
    a.addEventListener("click", function() {
        user_redirect(this)
    })
    a.className = `w-56 h-44 flex justify-center items-center flex-col cursor-pointer rounded-lg transition-all hover:scale-105 hover:shadow-md hover:drop-shadow-md hover:bg-gray-300`
    div0.className = `w-full h-4/6 flex justify-center items-center`
    div1.className = `w-[95%] h-[95%] rounded-lg border-2 border-solid border-gray-400 shadow-md drop-shadow-md bg-cover bg-center bg-no-repeat bg-[url(${elements_list[i].images[0]})]`
    div2.className = `w-full h-2/6 flex justify-start items-start overflow-hidden`
    div3.className = `w-full max-w-52 flex justify-start items-start flex-col pl-5 overflow-hidden text-ellipsis whitespace-nowrap font-bold transition-all mt-[100px] opacity-0`
    p0.className = `text-lg drop-shadow-md truncate overflow-hidden text-ellipsis whitespace-nowrap`
    p1.className = `text-xs drop-shadow-md text-gray-500`
    p0.innerHTML = elements_list[i].name
    p1.innerHTML = elements_list[i].material
    div3.appendChild(p0)
    div3.appendChild(p1)
    div2.appendChild(div3)
    div0.appendChild(div1)
    a.appendChild(div0)
    a.appendChild(div2)
    element_list.appendChild(a)
}
function user_redirect(element) {
    console.log(element.dataset.user_redirect);
    window.location.href = element.dataset.user_redirect
}
for (var i in elements_list[element_num].images) {
    var image = elements_list[element_num].images[i]
    var main_setter = document.createElement("div")
    var main_image = document.createElement("img")
    main_setter.addEventListener("mouseenter", function() {
        main_change(this)
    })
    main_setter.dataset.change_num = i
    main_setter.className = `main_setter w-10/12 h-14 rounded-lg border-2 border-solid border-${i == 0 ? `[#6E93B5]` : `gray-300`} drop-shadow-md shadow-md cursor-pointer transition-all bg-center bg-cover bg-no-repeat bg-[url(${image})]`
    main_image.className = `main_image transition-all ${i == 0 ? `flex opacity-100` : `hidden opacity-0`}`
    main_image.setAttribute("src", image)
    main_setters.appendChild(main_setter)
    main_carousel.appendChild(main_image)
}
main_element[0].innerHTML = elements_list[element_num].name
main_element[1].children[0].innerHTML = elements_list[element_num].rating
var int_rating = Number.parseInt(elements_list[element_num].rating)
var float_rating = Number.parseInt(elements_list[element_num].rating) - Number(elements_list[element_num].rating)
for (var i = 0; i <= int_rating; i ++) {
    main_element[1].children[1].children[i].className = `fa-solid fa-star`
    console.log(main_element[1].children[1].children[i]);
}
if (float_rating != 0) {
    main_element[1].children[1].children[int_rating].className = `fa-solid fa-star-half`
}
main_element[2].innerHTML = elements_list[element_num].material
main_element[3].innerHTML = elements_list[element_num].desc
/*
<a href="" class="min-w-32 h-12 pl-2 pr-4 flex justify-center items-center py-1 px-2 gap-x-2 bg-gray-200 rounded-lg drop-shadow-md shadow-md cursor-pointer transition-all hover:bg-gray-300">
    <div class="w-10 h-full drop-shadow-md shadow-md rounded-lg border-2 border-solid border-gray-300 bg-center bg-cover bg-no-repeat bg-[url(https://t.ctcdn.com.br/UVz1olMJelnOtdSJ1wE9On6GksY=/i490024.jpeg)]"></div>
    <p class="text-base font-bold">Amazon</p>
</a>
*/
for (var providers of elements_list[element_num].providers) {
    var provider = elements_providers[providers]
    var a = document.createElement("a")
    a.setAttribute("href", provider.link)
    a.className = `min-w-32 h-12 pl-2 pr-4 flex justify-center items-center py-1 px-2 gap-x-2 bg-gray-200 rounded-lg drop-shadow-md shadow-md cursor-pointer transition-all hover:bg-gray-300`
    var div = document.createElement("div")
    div.className = `w-10 h-full drop-shadow-md shadow-md rounded-lg border-2 border-solid border-gray-300 bg-center bg-cover bg-no-repeat bg-[url(${provider.icon})]`
    var p = document.createElement("p")
    p.className = `text-base font-bold`
    p.innerHTML = provider.name
    a.appendChild(div)
    a.appendChild(p)
    main_element[4].appendChild(a)
}
var main_setter = document.getElementsByClassName("main_setter")
function main_change(element) {
    for (var i = 0; i <= Number(main_setter.length) - 1; i ++) {
        if (main_setter[i].classList.contains("border-[#6E93B5]")) {
            main_setter[i].classList.remove("border-[#6E93B5]")
            main_setter[i].classList.add("border-gray-300")
        }
        main_carousel.children[i].className = `main_image transition-all ${i == Number(element.dataset.change_num) ? `flex opacity-100` : `hidden opacity-0`}`
    }
    element.classList.remove("border-gray-300")
    element.classList.add("border-[#6E93B5]")
}
function show_desc(element) {
    element_timeout = setTimeout(() => {
        element.children[1].children[0].classList.remove("mt-[100px]")
        element.children[1].children[0].classList.remove("opacity-0")
    }, 150);
}
function unshow_desc(element) {
    clearTimeout(element_timeout)
    element.children[1].children[0].classList.add("mt-[100px]")
    element.children[1].children[0].classList.add("opacity-0")
}