var btn = document.getElementById("botao");
var cha = document.getElementById("chamado");
var usr = document.getElementById("usuario");

function atendimento() {
    r = confirm("Deseja atender esse chamado?");
    if (r == true) {
        btn.href = "./atendimento_status.php?cha=" + cha.value + "&user=" + usr.value;
    } else {
        console.log("não")
    }
}