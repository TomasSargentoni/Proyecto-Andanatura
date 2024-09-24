// Inicializar puntajes por tema
let puntajes = {
    1: 0, 
    2: 0, 
    3: 0, 
    4: 0, 
    5: 0, 
    6: 0, 
};

// Guardar respuestas anteriores para restarlas en caso de cambio
let respuestasAnteriores = {};

// Función para obtener el ID del tema según la pregunta
function obtenerTemaId(preguntaIndex) {
    if (preguntaIndex >= 0 && preguntaIndex < 6) {
        return 1;
    } else if (preguntaIndex >= 6 && preguntaIndex < 9) {
        return 2;
    } else if (preguntaIndex >= 9 && preguntaIndex < 16) {
        return 3;
    } else if (preguntaIndex >= 16 && preguntaIndex < 26) {
        return 4;
    } else if (preguntaIndex >= 26 && preguntaIndex < 30) {
        return 5;
    } else if (preguntaIndex >= 30 && preguntaIndex < 37) {
        return 6;
    }
    return 0; // En caso de error
}

// Función para actualizar el puntaje
function actualizarPuntaje(preguntaId, valor, temaId) {
    // Verificar si ya hay una respuesta previa para la pregunta
    if (respuestasAnteriores[preguntaId]) {
        // Restar el valor anterior
        puntajes[temaId] -= respuestasAnteriores[preguntaId];
    }

    // Sumar el nuevo valor
    puntajes[temaId] += valor;

    // Guardar la nueva respuesta
    respuestasAnteriores[preguntaId] = valor;

    // Actualizar el puntaje en la interfaz
    document.getElementById(`puntaje${temaId}`).textContent = puntajes[temaId];
}
