let out = document.getElementById("logout");

let exit = document.getElementById("exit");

function logout() {
    let r = confirm("Realmente deseja sair dessa página?");

    if (r == true) {
        exit.innerHTML = "<?php session_destroy();?>";
        out.href = "../../index.html";
    } else {
        out.href = "../home.php";
    }
}

out.href = "../../index.html";
out.onclick = logout;