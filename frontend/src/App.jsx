import { useEffect, useState } from "react";
import "./App.css";
function App() {
  const [message, setMessage] = useState("");
  useEffect(() => {
    fetch("/api/mct")
      .then((res) => res.json())
      .then((data) => setMessage(data.message));
  }, []);
  return (
    <div>
      <h1>Frontend en React de Miguel Cuadros Toral</h1>
      <p>
        Esta aplicación se conecta al backend de Symfony pidiéndole una
        respuesta
      </p>
      <p>respuesta del Backend: {message || "Esperando respuesta..."}</p>
    </div>
  );
}
export default App;
