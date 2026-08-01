// Modo día / Modo noche
const body = document.querySelector("body");
const botonMode = document.querySelector("#btn-tema");

let deDia = false;

function altenarModo() {
    body.classList.toggle("claro");
    deDia = !deDia;
    if (deDia) {
        botonMode.textContent = "🌙 Modo Noche";
    } else {
        botonMode.textContent = "☀️ Modo Día";
    }
}
botonMode.addEventListener("click", altenarModo);

// Menú hamburguesa
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
  menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);