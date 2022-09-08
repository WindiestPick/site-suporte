var btn = document.getElementById("botao");
var cha = document.getElementById("chamado").value;
var usr = document.getElementById("usuario").value;


function atendimento() {
    let r = confirm("Deseja atender esse chamado?");
    if (r == true) {
        btn.href = "./atendimento_status.php?cha=" + cha + "&user=" + usr;
    } else {
        console.log("não");
    }
}

btn.onclick = atendimento;