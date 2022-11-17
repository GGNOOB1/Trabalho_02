let casa = document.getElementById("casa");
let apartamento = document.getElementById("apartamento");
let condominio = document.getElementById("condominio");
let sim = document.getElementById("sim");
let nao = document.getElementById("nao");
casa.addEventListener("click", (e)=> {
    condominio.disabled = true;
    condominio.style.backgroundColor = "rgba(0,0,0,0.13)";
    condominio.style.borderColor = "rgba(0,0,0,0.13)"
    condominio.style.cursor = "no-drop"

    sim.disabled = false;
    sim.style.backgroundColor = "white";

    nao.disabled = false;
    nao.style.backgroundColor = "white";
})

apartamento.addEventListener("click", (e) => {
    condominio.disabled = false;
    condominio.style.backgroundColor = "white";
    condominio.style.borderColor = "black"

    sim.disabled = true;
    sim.style.backgroundColor = "rgba(0,0,0,0.16)";
    sim.style.cursor = "no-drop"

    nao.disabled = true;
    nao.style.backgroundColor = "rgba(0,0,0,0.16)";
    nao.style.cursor = "no-drop"
})