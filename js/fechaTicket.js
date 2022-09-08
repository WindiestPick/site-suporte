var btn = document.getElementById("submit");

function register() {
    let descri = document.getElementById("description");

    let rtn = notNull(descri);

    if (rtn) {
        btn.type = "submit"
    } else {
        alert("Existem campos a serem preenchidos")
    }


}


function notNull(email) {
    if (email.value == null || email.value == '') {
        return false;
    }
    return true;
}

btn.onclick = register;