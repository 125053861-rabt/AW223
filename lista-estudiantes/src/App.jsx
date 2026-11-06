import Estudiante from "./components/estudiante";
import "./App.css";

export default function App(){
  const estudiantes = [
   {id:1,nombre:"Ivan",carrera:"Sistemas"},
   {id:2,nombre:"Andrea",carrera:"Enfermeria"},
   {id:3,nombre:"Adrian",carrera:"Diseño"},
  ];
  return(
    <main className="contenedor">
      <h1>Listado de estudiantes</h1>
      <form>
        <input type="text" placeholder="Escribe nombre"></input>
        <input type="text" placeholder="Escribe carrera"></input>
        <button type="button">Agregar</button>
      </form>

      <h2>Estudiantes resgistrados</h2>
      <ul>
        {estudiantes.map((estudiante) => (
          <Estudiante
          key={estudiante.id}
          estudiante={estudiante}
          />
        ))}
      </ul>

      <p>Total de estudiante:{estudiantes.length}</p>

    </main>
  )
}