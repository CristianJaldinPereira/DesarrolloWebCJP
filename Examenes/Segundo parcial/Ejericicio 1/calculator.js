function calcularTabla() {
    var opciones = document.getElementsByName("opcion");
    console.log(opciones);
    var opcion;

    for (var i = 0; i < opciones.length; i++) {

        if (opciones[i].checked) {
            opcion = parseInt(opciones[i].value);
        }
    }
    console.log(opcion);

    generarTabla(opcion);
}

function generarTabla(opcion) {

    var numero = parseInt(document.getElementById("numero").value);
    var hasta = parseInt(document.getElementById("hasta").value);
    var resultado = document.getElementById("resultado");
    var html = ``;

    console.log("el numero es: " + numero);

    if (numero <= 0 || numero > 10) {

        html=  `El mayor introducido es menor a 10 o negativo`;
        document.getElementById("resultado").innerHTML ="Numero introducido es mayor a 10 o un numero negativo";

    } else {
        document.getElementById("resultado").innerHTML ="";
        for (var i = 0; i < hasta; i++) {

            switch (opcion) {
                case 1:
                    html += `<td><div>${i + 1}+${numero}=${(i + 1) + numero}</div></td><br>`;
                    break;
                case 2:
                    html += `<td><div>${i + 1}-${numero}=${(i + 1) - numero}</div></td><br>`;
                    break;
                case 3:
                    html += `<td><div>${i + 1}*${numero}=${(i + 1) * numero}</div></td><br>`;
                    break;
                case 4:
                    html += `<td><div>${i + 1}/${numero}=${(i + 1) / numero}</div></td><br>`;
                    break;
            }
        }
    }
    resultado.innerHTML = `
    <table style= "border 1">
    <tr>`+html+`
    </tr>
    </table>`;
    
}
