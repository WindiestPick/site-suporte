let out = document.getElementById("logout");
let adm = document.getElementById("divadm");
let userAdm = document.getElementById("isadm");
let exit = document.getElementById("exit");

console.log(userAdm.value);


function logout() {
    let r = confirm("Realmente deseja sair dessa página?");

    if (r == true) {
        exit.innerHTML = "<?php session_destroy();?>";
        out.href = "../index.html";
    } else {
        out.href = "./home.php";
    }
}

function showAdm() {
    if (userAdm.value == '1') {
        adm.innerHTML = '<section class="box special"> <span class="image featured"><img src="../images/pic08.jpg" alt="" /></span> <h3><strong> Area do Suporte <br/> Gerenciador de Chamados </strong></h3> <ul class="actions special"> <li><a href="./geren.php" class="button alt tbtn">Abrir Gerenciador</a></li> </ul> </section>'
    }
}

showAdm()
out.href = "../index.html";
out.onclick = logout;

//href="index.html"