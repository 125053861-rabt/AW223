import { useState } from "react";

export default function Destinos({destino, onToggleFavorito, esFavorito}){
    const [mostrarDetalles,setMostrarDetalles] = useState(false);
    return(
        <li className="tarjeta-destino">
        <img src={destino.url} alt={destino.nombre}/>
        <strong>{destino.nombre}</strong>
        <span>Ubicación: {destino.ubicacion}</span>
        <span>Desde: ${destino.precio} MXN</span>
        {mostrarDetalles && <span>{destino.descripcion}</span>}
        <div>
            <button onClick={onToggleFavorito}>
                {esFavorito ? "Quitar de favoritos" : "Agregar favoritos"}
            </button>
            <button onClick={() => setMostrarDetalles(!mostrarDetalles)}>
                {mostrarDetalles ? "Ocultar Detalles" : "Ver detalles"}
            </button>
        </div>
        </li>
    );
}