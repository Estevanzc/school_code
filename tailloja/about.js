var industry_carousel = document.getElementById("industry_carousel")
var items_carousel = document.getElementById("items_carousel")
var industry_carousel_setter = document.getElementById("industry_carousel_setter")
var theme_changer = document.getElementsByClassName("theme_changer")
var industry_images = document.getElementsByClassName("industry_images")
var theme_changer = document.getElementsByClassName("theme_changer")
var item_images = document.getElementsByClassName("item_images")
var items_themes = [["https://5.imimg.com/data5/SELLER/Default/2020/8/HL/JN/NL/60115393/new-product.jpeg","https://www.thespruce.com/thmb/pm5WjMZbgO4C4XERTnjVwircb-I=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SPR-kitchen-cabinet-ideas-5215177-hero-e6cfcf9e2a3c4dd4908e5b53d4003c40.jpg","https://www.duroply.in/blog/wp-content/uploads/2017/08/Kitchen-Furniture.jpg","https://telkitchens.in/srckchn/uploads/2021/12/Top-6-Questions-Related-to-Kitchen-Cabinet-You-Must-Know-About.jpg","https://img.staticmb.com/mbcontent/images/crop/uploads/2023/12/minimalistic-kitchen-furniture-and-rattan-chairs_0_1200.jpg"],["https://www.ubuy.com.br/productimg/?image=aHR0cHM6Ly9pNS53YWxtYXJ0aW1hZ2VzLmNvbS9hc3IvODI5YTY2ZTEtNzE1Mi00ZTBmLTg4ZDItYWEyZDRiYzdmZTJiLjRmMjJmYmNiM2Y0ZWVkOTQ5ZGIzODRhYWRiNTIzYTcxLmpwZWc.jpg","https://5.imimg.com/data5/SELLER/Default/2023/4/298313334/MH/HU/ZH/7813591/modular-bedroom-furniture.jpg","https://cdn11.bigcommerce.com/s-zllqv0a9td/images/stencil/1280x1280/d/furniture-hero__00680.original.jpg","https://casefurniture.com/cdn/shop/collections/bedroom-furniture-760937.jpg?v=1625496848","https://i.ebayimg.com/images/g/8sgAAOSw0INblq3r/s-l1600.jpg"],["https://www.strachan.co.uk/app/uploads/product-header-home-office-siena-american-black-walnut.jpg","https://officemaster.ae/img/2018/12/office-furniture-slider-two1-rdgyywa-.jpg","https://furniturerow.scene7.com/is/image/FurnitureRow/mountain-home-office-group?dpr=off&fit=fit,1&wid=1920&fmt=jpg","https://furniturerow.scene7.com/is/image/FurnitureRow/Office-DeskChairs-Heritage?dpr=off&fit=fit,1&wid=1920&fmt=jpg","https://www.bestar.com/wp-content/uploads/2020/03/modern-office-interior.jpg"],["https://mastella.it/wp-content/uploads/1627_WoodRd_21-1-e1617897191570-1.jpg","https://wetstyle.com/wp-content/uploads/2019/09/Frame_Linea_Coffee_Bean-057_DxO_FLAT-1700x950.jpg","https://wgassets.duravit.com/photomanager-duravit/file/8a8a818d7fd49026017fdeddffd25aee/l-cube_01.jpg?derivate=width~1920","https://mastella.it/wp-content/uploads/GPF_7218-Edit-1-scaled.jpg","https://i.etsystatic.com/18597983/r/il/c909af/2533753019/il_fullxfull.2533753019_fpmw.jpg"]]
var industry_images_num = 1
var theme_num = 0
var item_num = 0
setInterval(() => {
    console.log(industry_images_num);
    //industry_carousel.className = `w-full h-[500px] flex justify-center items-end pb-5 overflow-hidden shadow-md drop-shadow-md border-b-2 border-solid border-gray-500 bg-center bg-cover bg-no-repeat bg-[url(${industry_images[industry_images_num]})]`
    for (var i = 0; i <= Number(industry_carousel_setter.children.length) - 1; i++) {
        industry_images[i].className = `industry_images w-screen h-screen transition-all ${industry_images_num == i ? "flex opacity-100" : "hidden opacity-0"}`
        industry_carousel_setter.children[i].className = `h-4/6 rounded-lg transition-all ${industry_images_num == i ? "w-3/12 bg-[#5C7B98]" : "w-2/12 bg-gray-400"}`
        //h-4/6 rounded-lg transition-all w-3/12 bg-[#5C7B98]
    }
    if (industry_images_num < Number(industry_images.length) - 1) {
        industry_images_num++
    } else {
        industry_images_num = 0
    }
}, 5000);
function theme_change(element) {
    theme_num = Number(element.dataset.theme_num)
    for (var i = 0; i <= Number(theme_changer.length) - 1; i ++) {
        theme_changer[i].className = `theme_changer cursor-pointer transition-all hover:opacity-100 ${theme_num == i ? "opacity-100 translate-x-10" : "opacity-50 hover:translate-x-1"}`
    }
    for (var i in items_themes[theme_num]) {
        item_images[i].setAttribute("src", `${items_themes[theme_num][i]}`)
    }
    item_num = Number(item_images.length) - 1
    item_change({dataset: {change_num: 1}})
    //theme_changer cursor-pointer transition-all hover:opacity-100 opacity-50 hover:translate-x-1
}
theme_change({dataset: {theme_num: 0}})
function item_change(element) {
    var change_num = Number(element.dataset.change_num)
    if (change_num == 0) {
        item_num = item_num > 0 ? item_num - 1 : Number(item_images.length) - 1
    } else {
        item_num = item_num < Number(item_images.length) - 1 ? item_num + 1 : 0 
    }
    for (var i = 0; i <= Number(item_images.length) - 1; i ++) {
        item_images[i].className = `item_images w-full h-full transition-all ${item_num == i ? `flex opacity-100` : `hidden opacity-0`}`
        items_carousel.children[1].children[0].children[i].className = `h-4/6 rounded-lg transition-all drop-shadow-md shadow-md ${item_num == i ? `w-3/12 bg-[#5C7B98]` : `w-2/12 bg-gray-400`}`
    }
}
