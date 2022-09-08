var btn = document.getElementById("submit");

function register() {
    let priory = document.getElementsByName("priority");
    let descri = document.getElementById("description");
    let title = document.getElementById("title");

    let rtn = notNull(priory, descri, title);

    if (rtn) {
        btn.type = "submit"
    } else {
        alert("Existem campos a serem preenchidos")
    }


}


function notNull(name, stname, email) {
    if (name[0].checked || name[1].checked || name[2].checked) {
        console.log("ok");
    } else {
        return false;
    }
    if (stname.value == null || stname.value == '') {
        return false;
    }
    if (email.value == null || email.value == '') {
        return false;
    }
    return true;
}

btn.onclick = register;