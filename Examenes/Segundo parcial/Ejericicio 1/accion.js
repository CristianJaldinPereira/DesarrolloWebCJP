function changeMenu(id, contenido){
    let principal = document.getElementById(id)

    fetch(contenido)
    .then(responde => responde.text())
    .then(data => (principal.innerHTML = data));
}
function changeMenuAJX(id, content){
    var contenedor;
    contenedor = document.getElementById(id);
    var ajax = new XMLHttpRequest();
    ajax.open("get",content,true);
    ajax.onreadystatechange = function(){
        
        if(ajax.readyState == 4){
            contenedor.innerHTML = ajax.responseText;ss
        }
    }    
ajax.setRequestHeader("Content-Type","text/html; charset=utf-8")
ajax.send();
}
function chargeButtonsAndData(){
    let botones = document.getElementById("buttons-select")
    let principal = document.getElementById("principal")
    let html = `<div>
                <button class="button-select" onclick="changeMenu('principal','fornulario.html' )">1</button>
                <button class="button-select" onclick="changeMenuAJX('principal', '../Ejericicio 3/imagen.html')">2</button>
                <button class="button-select" onclick="changeMenuAJX('principal', '../Ejericicio 4/forminserar3.html')">3</button>
            </div>`
    
            botones.innerHTML = html
    principal.innerHTML = `<h1>Estudiante: Crishian Jaldin Pereira</h1>
    <br>        
    <h2>Carnet: 111-411</h2>`
}