var main_carousel = document.getElementById("main_carousel")
var main_carousel_setter = document.getElementById("main_carousel_setter")
var element_list = document.getElementById("elements_list")
var main_carousel_images = [["https://5.imimg.com/data5/SELLER/Default/2020/8/HL/JN/NL/60115393/new-product.jpeg", "https://www.duroply.in/blog/wp-content/uploads/2017/08/Kitchen-Furniture.jpg", "https://img.staticmb.com/mbcontent/images/crop/uploads/2023/12/minimalistic-kitchen-furniture-and-rattan-chairs_0_1200.jpg", "https://telkitchens.in/srckchn/uploads/2021/12/Top-6-Questions-Related-to-Kitchen-Cabinet-You-Must-Know-About.jpg", "https://www.thespruce.com/thmb/pm5WjMZbgO4C4XERTnjVwircb-I=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SPR-kitchen-cabinet-ideas-5215177-hero-e6cfcf9e2a3c4dd4908e5b53d4003c40.jpg", "https://www.gower-furniture.co.uk/wp-content/uploads/2021/05/Capri-Dark-Grey.jpg", "https://www.wakefit.co/guides/wp-content/uploads/2023/01/space-saving-furniture-1.jpg", "https://assets-news.housing.com/news/wp-content/uploads/2021/11/16132537/kitchen-interior-shutterstock_250878214-1200x700-compressed.jpg", "https://images.adsttc.com/media/images/5dd7/fe01/3312/fd8e/9d00/019a/large_jpg/TR-J_Kitchen_WingLine_L_Atira_Hauptansicht_A3_FINAL_2019_04_.jpg?1574436331", "https://images.livspace-cdn.com/plain/https://d3gq2merok8n5r.cloudfront.net/abhinav/ond-1634120396-Obfdc/jas-2023-1688629305-0KDli/kitchen-1689059826-HjSR9/ki6-2-1690191145-WyZ04.jpg"],["https://www.ubuy.com.br/productimg/?image=aHR0cHM6Ly9pNS53YWxtYXJ0aW1hZ2VzLmNvbS9hc3IvODI5YTY2ZTEtNzE1Mi00ZTBmLTg4ZDItYWEyZDRiYzdmZTJiLjRmMjJmYmNiM2Y0ZWVkOTQ5ZGIzODRhYWRiNTIzYTcxLmpwZWc.jpg","https://5.imimg.com/data5/SELLER/Default/2023/4/298313334/MH/HU/ZH/7813591/modular-bedroom-furniture.jpg","https://images.squarespace-cdn.com/content/v1/65f442a17311c97532a87466/1710506852818-8R88ALKCT2NMBJEPLO1P/Boulder-Creek-Bedroom-Collection_sm.jpg","https://www.houseofoak.co.uk/media/catalog/category/chatsworth-royal-blue-lifestyle-square_1.jpg","https://cdn11.bigcommerce.com/s-xxipb35mkl/images/stencil/1280x1280/products/45435/146023/8df4ffc5-6653-4441-a502-b01bf1f60f96__84776.1669850765.jpg?c=2","https://www.paylessfurnituremt.com/blog/wp-content/uploads/sites/119/2021/01/Essential-Bedroom-Furniture.jpg","https://5.imimg.com/data5/SELLER/Default/2024/2/384562346/AM/KZ/ET/118180564/bedroom-furniture-set.jpg","https://smartfurniture.com.eg/wp-content/uploads/2023/10/Alba-Landscape.jpeg","https://5.imimg.com/data5/SELLER/Default/2023/10/356042913/LI/FQ/KX/132846224/bedroom-furniture-set.jpg","https://cdn11.bigcommerce.com/s-zllqv0a9td/images/stencil/1280x1280/d/furniture-hero__00680.original.jpg"],["https://www.armstrongsofficefurniture.co.uk/wp-content/uploads/2023/04/Quality_office_furniture_desks_chairs.png","https://www.strachan.co.uk/app/uploads/product-header-home-office-siena-american-black-walnut.jpg","https://furniturerow.scene7.com/is/image/FurnitureRow/mountain-home-office-group?dpr=off&fit=fit,1&wid=1920&fmt=jpg","https://officemaster.ae/img/2018/12/office-furniture-slider-two1-rdgyywa-.jpg","https://www.nevillejohnson.co.uk/wp-content/uploads/Sc0309_14_wg_RTCon_30mm_main.jpg","https://cdn.shopify.com/s/files/1/1958/1187/collections/sigma-office-furniture-BDI-modern-desk-storage-3.jpg?v=1576175115","https://s3.dutchcrafters.com/product-images/pid_69979-Amish-Timberleaf-Office-Furniture-Set--10.jpg","https://officeshop.ae/wp-content/uploads/2021/11/Max.jpg","https://officeplus.ae/wp-content/uploads/2020/08/WhatsApp-Image-2021-09-08-at-12.08.33-PM-1.jpeg","https://www.conklinoffice.com/files/conklin/pages/new_used_remanufactured/2A.jpg"],["https://i5.walmartimages.com/seo/Living-Room-Furniture-Sets-2-Pieces-Sofa-Mid-Century-Button-Tufted-Couch-Set-2-Velvet-Chesterfield-Roll-Arm-5-Pillows-Futon-Loveseat-Home-Office_ecd07456-bb43-4125-ba17-1be82ba6b58e.c2bc58c6fc07802b1d201c7d3096d532.jpeg","https://hemmingandwills.co.uk/cdn/shop/articles/featured_image_-_living_room_furniture_layout_1600x@2x.jpg?v=1692692232","https://assets.wfcdn.com/im/27306797/compr-r85/2159/215984266/6-piece-living-room-set.jpg","https://www.bhg.com/thmb/YHDWa7aSiT0mMv5mj_k26DnaDB4=/1866x0/filters:no_upscale():strip_icc()/renovated-neutral-colored-living-room-2f194807-235cf8f650594de5859d48b9f550db0c.jpg","https://embed.widencdn.net/img/cityfurniture/rkn7tmvs5n/1920px/MAR6834-WK2423-0612-NEWARRIVALS-LIVINGROOM-COLORBLOCK-XLG.webp?q=100","https://rnb.scene7.com/is/image/roomandboard/category_living_subcat01?size=2400,2400&scl=1","https://s3.dutchcrafters.com/product-images/pid_62880_210.jpg","https://assets.wfcdn.com/im/27837805/compr-r85/1435/143581391/adrie-3-piece-living-room-set.jpg","https://blog.homezonefurniture.com/wp-content/uploads/2022/06/Living-Room-Furniture-scaled.jpg","https://media.architecturaldigest.com/photos/598dd8815f33bd7d13f70ac4/master/w_1600%2Cc_limit/Living-room-in-amagansett-beach-house.jpg"],["https://www.thespruce.com/thmb/0oakhB00ZvrZ-097zF2CO6umvjY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Interior-Impressions-Hastings-Hideaway-Hastings-MN-Laundry-Room-97da2e2a699b422cb572125281fff18b.jpg","https://www.closetfactory.com/wp-content/uploads/2017/09/Laundry-Room_17.jpg","https://californiaclosets.s3.amazonaws.com/wp-content/uploads/2018/06/meadowood-laundry-room-luxematte-dove-2.jpg","https://www.thespruce.com/thmb/4JZl0f_Bmqhi6s89U57wO57-Wmg=/2048x0/filters:no_upscale():max_bytes(150000):strip_icc()/inspiring-laundry-room-design-ideas-4098507-hero-253149ae1c9542058c5d39b19896ae88.jpg","https://luxurymountainliving.net/wp-content/uploads/2021/07/Copy-of-July-2021-Graphics-Primary-24-1080x800.png","https://www.studio35york.co.uk/wp-content/uploads/2020/11/10-Main-Image.jpg","https://handmadekitchen.co.uk/wp-content/uploads/2020/08/handmade-utility-room-furniture-hadley-wood.jpg","https://mastella.it/wp-content/uploads/2022/11/detergent-resistant-laundry-furniture.webp","https://www.idfdesign.com/images/modular-laundry-cabinets/lime-wash-comp-01-cabinets-for-washing-machine-3.jpg","https://thekitchencompany.be/wp-content/uploads/2023/09/Buanderie_verte-scaled.jpg"],["https://mastella.it/wp-content/uploads/1627_WoodRd_21-1-e1617897191570-1.jpg","https://do5nkkzntcenb.cloudfront.net/Project/Sites/Lixil/shared/HERO-Image-With-Link-List/AS/Bathroom/bathroom-furniture/Bathroom-Furniture-Banner-4.jpg?h=600&la=en-US&w=1500","https://wetstyle.com/wp-content/uploads/2019/09/Frame_Linea_Coffee_Bean-057_DxO_FLAT-1700x950.jpg","https://wgassets.duravit.com/photomanager-duravit/file/8a8a818d7fd49026017fdeddffd25aee/l-cube_01.jpg?derivate=width~1920","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGB-J86oFXSM4lSFcCiluyfY3DeiR63Ech7g&s","https://assets-global.website-files.com/6334a8d89862a1cc15eae9e1/63dd6b99e945422562215b3e_210622_ROBERN_MAIN_LINE_MERION_SHOT_03_017_HERO_V3_ALT%20CLOSED%20(2).jpg","https://media.product.which.co.uk/prod/images/1534_1022/gm-65cc2ac9-b8a0-477a-9198-3ef4e63e226c-bathroom-units.jpg","https://i.ebayimg.com/images/g/qrcAAOSw-2xezjYH/s-l1600.jpg","https://www.cphart.co.uk/images/blog/Signature%20Cabinets%20and%20Furniture.jpg","https://rnb.scene7.com/is/image/roomandboard/category_bath_subcat01?size=2400,2400&scl=1"]]
var ambient_num = Number(document.getElementsByTagName("body")[0].dataset.ambient_num)
main_carousel_images = main_carousel_images[ambient_num]
var elements_list = elements_data[ambient_num]
var element_timeout
var mc_num = 0
for (var i in main_carousel_images) {
    var mc_image = document.createElement("img")
    var mc_setter = document.createElement("div")
    mc_image.className = `mc_image transition-all ${i == 0 ? `flex opacity-100` : `hidden opacity-0`}`
    mc_setter.className = `mc_setter h-3/6 rounded-xl transition-all ${i == 0 ? `w-2/12 bg-[#5C7B98]` : `w-1/12 bg-gray-400`}`
    mc_image.setAttribute("src", main_carousel_images[i])
    main_carousel.children[1].appendChild(mc_image)
    main_carousel_setter.appendChild(mc_setter)
}
console.log(main_carousel_images[i]);
/*
<a href="" onmouseenter="show_desc(this)" onmouseleave="unshow_desc(this)" class="w-[30%] h-56 flex justify-center items-center flex-col cursor-pointer rounded-lg transition-all hover:scale-105 hover:shadow-md hover:drop-shadow-md hover:bg-gray-300">
    <div class="w-full h-4/6 flex justify-center items-center">
        <div class="w-[95%] h-[95%] rounded-lg border-2 border-solid border-gray-400 shadow-md drop-shadow-md bg-cover bg-center bg-no-repeat bg-[url(https://img.staticmb.com/mbcontent/images/uploads/2023/12/minimalistic-kitchen-furniture-and-rattan-chairs.jpg)]"></div>
    </div>
    <div class="w-full h-2/6 flex justify-start items-start overflow-hidden">
        <div class="w-full max-w-52 flex justify-start items-start flex-col pl-5 overflow-hidden text-ellipsis whitespace-nowrap font-bold transition-all mt-[100px] opacity-0">
            <p class="text-lg drop-shadow-md truncate overflow-hidden text-ellipsis whitespace-nowrap">Element_name</p>
            <p class="text-xs drop-shadow-md text-gray-500">Element_material</p>
        </div>
    </div>
</a>
*/
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
    a.className = `w-[30%] h-56 flex justify-center items-center flex-col cursor-pointer rounded-lg transition-all hover:scale-105 hover:shadow-md hover:drop-shadow-md hover:bg-gray-300`
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
var mc_image = document.getElementsByClassName("mc_image")
var mc_setter = document.getElementsByClassName("mc_setter")
function main_change(element) {
    var change_num = Number(element.dataset.change_num)
    if (change_num == 0) {
        mc_num = mc_num > 0 ? mc_num - 1 : Number(main_carousel_images.length) - 1
    } else {
        mc_num = mc_num < Number(main_carousel_images.length) - 1 ? mc_num + 1 : 0
    }
    for (var i in main_carousel_images) {
        mc_image[i].className = `mc_image transition-all ${i == mc_num ? `flex opacity-100` : `hidden opacity-0`}`
        mc_setter[i].className = `mc_setter h-3/6 rounded-xl transition-all ${i == mc_num ? `w-2/12 bg-[#5C7B98]` : `w-1/12 bg-gray-400`}`
    }
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
