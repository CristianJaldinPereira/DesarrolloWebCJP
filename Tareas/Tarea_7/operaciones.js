document.getElementById('calcular').addEventListener('click', function() {
    
    const valorA = parseFloat(document.getElementById('valorA').value);
    const valorB = parseFloat(document.getElementById('valorB').value);
    const operacion = document.getElementById('operacion').value;
    
    let resultado;

    if (isNaN(valorA) || isNaN(valorB)) {
        resultado = "Por favor, introduce valores numéricos válidos.";
    } else {
        switch (operacion) {
            case 'suma':
                resultado = valorA + valorB;
                break;
            case 'resta':
                resultado = valorA - valorB;
                break;
            case 'multiplicacion':
                resultado = valorA * valorB;
                break;
            case 'division':
                if (valorB !== 0) {
                    resultado = valorA / valorB;
                } else {
                    resultado = "Error: División por cero.";
                }
                break;
            default:
                resultado = "Operación no válida.";
        }
    }


    document.getElementById('resultado').innerText = "Resultado: " + resultado;
});
