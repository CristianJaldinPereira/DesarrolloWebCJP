var contenedor = document.getElementById('principal');
function calcularRaices() {
    const a = parseFloat(document.getElementById("a").value);
    const b = parseFloat(document.getElementById("b").value);
    const c = parseFloat(document.getElementById("c").value);

    const discriminante = b * b - 4 * a * c;
    

    let raiz1, raiz2;

    if (discriminante >= 0) {

        raiz1 = (-b + Math.sqrt(discriminante)) / (2 * a);
        raiz2 = (-b - Math.sqrt(discriminante)) / (2 * a);
    } else {
    
        const parteReal = (-b / (2 * a)).toFixed(2);
        const parteImaginaria = (Math.sqrt(-discriminante) / (2 * a)).toFixed(2);

        raiz1 = `${parteReal} `;
        raiz2 = `${parteReal} `;
    }

    document.getElementById("raiz1").innerHTML = `x1 = ${raiz1}`;
    document.getElementById("raiz2").innerHTML = `x2 = ${raiz2}`;
}
