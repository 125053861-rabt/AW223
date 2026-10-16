const parametros= new URLSearchParams(window.location.search);
const estado = parametros.get("estadophp")

if(estado === "exito"){
    alert("mensaje enviado con exito");
}else if(estado ==="fallo"){
    alert("el mensaje no se guardo, preguntale a tu inteligencia de confianza");
}

if(estado != null){
    window.history.replaceState({},document.title,window.location.pathname);
}