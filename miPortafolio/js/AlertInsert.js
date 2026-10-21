const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadophp");

if (estado === "exito") {
    alert("mensaje enviado con exito");
} else if (estado === "fallo") {
    alert("el mensaje no se guardo, preguntale a tu inteligencia de confianza");
} else if (estado === "vacios") {
    alert("Error: No se permiten campos vacios");
} else if (estado === "actualizado") {
    alert("Registro actualizado exitosamente yupii :D");
} else if (estado === "eliminado") {
    alert("Al registro lo desaparecion por saber mucho");
}

if (estado != null) {
    window.history.replaceState({}, document.title, window.location.pathname);
}