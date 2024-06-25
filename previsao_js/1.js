var city_input = document.getElementById("city_name")
var weather_list = document.getElementById("weather_list")
var city_name
var city_code
var data
async function data_taker(city_data, action) {
    if (action) {
        data = await fetch(`http://servicos.cptec.inpe.br/XML/listaCidades?city=${city_data}`)
    } else {
        data = await fetch(`http://servicos.cptec.inpe.br/XML/cidade/7dias/${city_data}/previsao.xml`)
    }
    data = await data.text()
    data = await new window.DOMParser().parseFromString(data, "text/xml")
}
function text_formater(txt) {
    txt = txt.toLowerCase()
    txt = txt.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
    return txt
}
function city_submit(element) {
    city_name = "São Paulo"//
    city_name = text_formater(city_name)
    data_taker(encodeURIComponent(city_name), true)
    var city = data.getElementsByTagName('cidades')[0].children
    for (var i = 0; i < city.length; i ++) {
        var name = text_formater(city[i].children[0].innerHTML)
        console.log(`${text_formater(city[i].children[0].innerHTML)}, ${city_name}`)
        if (name == city_name) {
            city_code = Number(city[i].children[2].innerHTML)
            console.log(city_code)
            data_taker(city_code, false)
            city = data.getElementsByTagName('cidade')[0].children
            break
        }
    }
    weather_list.innerHTML = `<ul></ul>`
    for (var i = 3; i < city.length; i ++) {
        var p = document.createElement("p")
        var li0 = document.createElement("li")
        var li1 = document.createElement("li")
        var li2 = document.createElement("li")
        p.innerHTML = `<strong>Previsão para o dia ${city[i].children[0].innerHTML}</strong>`
        li1.innerHTML = `Máxima => ${city[i].children[2].innerHTML}`
        li2.innerHTML = `Mínima => ${city[i].children[3].innerHTML}`
        li0.appendChild(p)
        li0.appendChild(li1)
        li0.appendChild(li2)
        weather_list.children[0].appendChild(li0)
    }
}