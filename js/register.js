function register() {
    let name = document.getElementById("name");
    let stname = document.getElementById("lastname");
    let email = document.getElementById("email");

    let pass = document.getElementById("password");
    let conf_pass = document.getElementById("confirm-password");
    let sub = document.getElementById("submit");

    let rtn = notNull(name, stname, email, pass, conf_pass);

    if (rtn) {
        confirm_password(pass, conf_pass, sub);
    } else {
        alert("Existem campos a serem preenchidos")
    }


}


function notNull(name, stname, email, pass, conf_pass) {
    if (name.value == null || name.value == '') {
        return false;
    }
    if (stname.value == null || stname.value == '') {
        return false;
    }
    if (email.value == null || email.value == '') {
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