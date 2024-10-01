var input_devolucao = document.getElementById("devolucao")
var devolucao_p = document.getElementById("devolucao_p")
function devolucao_calc(element) {
    if (element.value) {
        var year = Number(element.value.substring(0, 4))
        var month = Number(element.value.substring(5, 7))
        var day = Number(element.value.substring(8, 10))
        var month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month]
        if (day + 7 <= month_days) {
            day += 7;
        } else {
            day = (day + 7) - month_days + 1;
            if (month < 12) {
                month ++;
            } else {
                month = "01";
                year ++;
            }
        }
        var date = `${year}-${month < 10 ? `0${month}` : month}-${day < 10 ? `0${day}` : day}`
        input_devolucao.value = date
        devolucao_p.innerHTML = date
    }
}
