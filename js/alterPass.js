function register() {
    let passA = document.getElementById("pass");
    let pass = document.getElementById("newPass");
    let conf_pass = document.getElementById("conf_pass");
    let sub = document.getElementById("submit");

    let rtn = notNull(passA, pass, conf_pass);

    if (rtn) {
        confirm_password(pass, conf_pass, sub);
    } else {
        alert("Existem campos a serem preenchidos")
    }


}


function notNull(passA, pass, conf_pass) {
    if (passA.value == null || passA.value == '') {
        return false;
    }
    if (pass.value == null || pass.value == '') {
        return false;
    }
    if (conf_pass.value == null || conf_pass.value == '') {
        return false;
    }
    return true;
}


function confirm_password(pass, conf_pass, sub) {
    if (pass.value == conf_pass.value) {
        sub.type = "submit";
    } else {
        pass.style.borderColor = "red";
        conf_pass.style.borderColor = "red";
    }
}