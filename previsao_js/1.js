var city_input = document.getElementById("city_name")
var city_name
var data
async function data_taker(action, city_data) {
    if (action) {
        data = await fetch(`http://servicos.cptec.inpe.br/XML/listaCidades?city=${city_name}`)
    } else {
        data = await fetch(`http://servicos.cptec.inpe.br/XML/cidade/7dias/${city_data}}/previsao.xml`)
    }
    data = await data.text()
    data = await new window.DOMParser().parseFromString(data, "text/xml")
}
function city_submit(element) {
    city_name = "São Paulo"
    city_name = city_name.toLowerCase()
    city_name = city_name.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
    city_name = encodeURIComponent(city_name)
    data_taker(true, city_name)
}