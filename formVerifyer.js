var alert_label = document.getElementsByClassName("alert_label")
var submit_verifyer = document.getElementsByClassName("submit_verifyer")
var submit_permission = true
function input_verifyer(element) {
    if (element.id == "cpf") {
        element.parentNode.children[0].children[1].className = "transition-all text-sm"
    }
    if (element.dataset.min_char) {
        if (Number(element.value.length) < Number(element.dataset.min_char)) {
            element.parentNode.children[0].children[1].classList.add("opacity-100")
            submit_permission = false
        } else {
            element.parentNode.children[0].children[1].classList.remove("opacity-100")
        }
    }
    if (element.dataset.char) {
        if (Number(element.value.length) != Number(element.dataset.char) && element.id != "cpf") {
            element.parentNode.children[0].children[1].classList.add("opacity-100")
            submit_permission = false
        } else if (Number(element.value.length) != Number(element.dataset.char) && element.id == "cpf") {
            element.parentNode.children[0].children[1].classList.add("text-red-500")
            setTimeout(() => {
                element.parentNode.children[0].children[1].className = "transition-all text-sm"
            }, 1000);
            submit_permission = false
        }
    }
    if (element.dataset.number) {
        console.log(element);
        if (number_verifyer(element.value)) {
            submit_permission = false
            if (element.id == "ano") {
                element.classList.add("border-red-500")
                console.log("asdasd");
                
            } else {
                element.parentNode.children[0].children[1].classList.add(element.id == "cpf" ? "text-red-500" : "opacity-100")
                if (element.id == "cpf") {
                    setTimeout(() => {
                        element.parentNode.children[0].children[1].className = "transition-all text-sm"
                    }, 1000);
                }
            }
        } else if (element.id == "ano") {
            element.classList.remove("border-red-500")
        }
    }
    if (element.type == "date") {
        if (!element.value) {
            submit_permission = false
            element.classList.add("border-red-500")
        } else {
            element.classList.remove("border-red-500")
        }
    } else if (element.type == "number") {
        if (Number(element.value) < Number(element.min)) {  
            element.classList.add("border-red-500")
            submit_permission = false
        } else {
            element.classList.remove("border-red-500")
        }
    }
}
function verifyer_caller(element) {
    submit_permission = true
    alert_label_num = Number(alert_label.length - 1)
    for (var i = 0; i <= alert_label_num; i ++) {
        if (alert_label[alert_label_num].children[1].classList.contains("opacity-100")) {
            alert_label[alert_label_num].children[1].classList.remove("opacity-100")
        }
    }
    for (var i = 0; i <= Number(submit_verifyer.length - 1); i ++) {
        input_verifyer(submit_verifyer[i])
    }
    if (submit_permission) {
        document.getElementsByTagName("form")[0].submit()
    }
}
function number_verifyer(str) {
    for (var i = 0; i <= Number(str.length - 1); i ++) {
        if (isNaN(str[i])) {
            return true
        }
    }
    return false
}
