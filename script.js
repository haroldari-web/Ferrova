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

// Avisos
const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function revisarContacto(event) {
    event.preventDefault();
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    if (nombre === "") {
        avisoContacto.textContent = "Falta su nombre.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        avisoContacto.textContent = "Por favor ingrese un correo valido.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else {
        avisoContacto.textContent = "Solicitud enviada, usted sera contactado pronto.";
        avisoContacto.classList.add("exito");
        avisoContacto.classList.remove("error");
    }
}

formularioContacto.addEventListener("submit", revisarContacto);