import Destinos from "./components/Destinos";
import "./App.css";
import queretaroImg from "./assets/queretaro.png";
import vegasImg from "./assets/vegas.jpg";
import cancunImg from "./assets/cancun.jpg";
import { useState } from "react";

export default function App(){
  const [busqueda, setBusqueda] = useState("");
  const [favoritos, setFavoritos] = useState([]);
  const [favoritosactivos, setFavoritosactivos] = useState(false);
  const destinos = [
   {id:1,nombre:"Queretaro",ubicacion:"Mexico",precio:"6767",descripcion:"Viaja al centro de queretaro",url:queretaroImg},
   {id:2,nombre:"Vegas",ubicacion:"Estados Unidos",precio:"6969",descripcion:"Ve a apostar todo tu dinero en las Vegas",url:vegasImg},
   {id:3,nombre:"Cancun",ubicacion:"Mexico",precio:"67000",descripcion:"Viaja a las hermosas playas con zargazo de Cancun",url:cancunImg},
  ];

  const filtrados = destinos.filter((destino) => 
  `${destino.nombre} ${destino.ubicacion}`
  .toLowerCase().includes(busqueda.toLowerCase())
  );

  const cambiarFavorito = (id) => {
    setFavoritos((actuales) =>
      actuales.includes(id)
        ? actuales.filter((favoritoId) => favoritoId !== id)
        : [...actuales, id]
  );
};

const destinosAMostrar = favoritosactivos
  ? filtrados.filter((destino) => favoritos.includes(destino.id))
  : filtrados;

  return(
    <main className="contenedor">
      <li>
        <h2>Descubre tu proximo Destino</h2>
        <p>Descubre lugares increibles y explora diferentes lados del planeta</p>
      </li>
      <li>
        <strong>Destinos favoritos</strong>
        <p>Tu proxima aventura comienza aqui</p>
        <p>{favoritos.length}</p>
      </li>
      <strong>Explora destinos turisticos</strong>
      <input type="text" placeholder="Busca un destino" value={busqueda} onChange={(e) => setBusqueda(e.target.value)}/>
      <button onClick={() => setFavoritosactivos(!favoritosactivos)}>
        {favoritosactivos ? "Mostrar todo" : "Mostrar favoritos"}
      </button>
      <ul className="lista-destinos">
        {destinosAMostrar.map((destino) => (
           <Destinos
              key={destino.id}
              destino={destino}
              esFavorito={favoritos.includes(destino.id)}
              onToggleFavorito={() => cambiarFavorito(destino.id)}
            />
        ))}
      </ul>
    </main>
  )
}