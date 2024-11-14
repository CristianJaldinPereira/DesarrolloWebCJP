var idPersona=0
function setValor(valor) {
	idPersona=valor;
	console.log(valor);
}
function listar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'read.php', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			lista = JSON.parse( ajax.responseText)
console.log(lista) 
html="";
html+=  `<table class="table table-striped">
    <tr>
        <th scope="col" >Fotografia</th>
        <th ><a href="javascript:ordenar('nombres')">Nombres</a></th>
        <th><a href="javascript:ordenar('apellidos')">Apellidos</a></th>
        <th><a href="javascript:ordenar('carnet')">Carnet</a></th>
        <th><a href="javascript:ordenar('sexo')">Sexo</a></th>
        <th><a href="javascript:ordenar('fecha_nacimiento')">Fecha de nacimiento</a></th>
        <th><a href="javascript:ordenar('direccion')">Direccion</a></th>
        <td><a href="javascript:ordenar('mesa')">Mesa</a></th>
        <th>Operaciones</th>
    </tr> `
    for(i=0; i<lista.length; i++){
		html+= `
    <tr>
     
<td> <img src="images/${lista[i].fotografia}"  width="100px" ></td>
<td>${lista[i].nombres}</td>
<td>${lista[i].apellidos}</td>
<td>${lista[i].carnet}</td>
<td>${lista[i].sexo}</td>
<td>${lista[i].fecha_nacimiento}</td>
<td>${lista[i].direccion}</td>
<td>${lista[i].mesa}</td>
       <td> <div class="row"><div class="col"> <a class="btn btn-warning" href="javascript:cargarContenido('form_update.php?id=${lista[i].id} ')">Editar</a> 
            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmarModal" onclick="setValor(${lista[i].id})" >Eliminar</a> </div> </div></td>
    </tr> `

	}
contenedor.innerHTML = html;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
	
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function eliminar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'delete.php?id='+idPersona, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
	
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function crear() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var formulario=document.getElementById('formulario');
	var datos=new FormData(formulario);
	console.log(datos);
	ajax = new XMLHttpRequest()
	ajax.open("POST", "create.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send(datos);
}

function actualizar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var formulario=document.getElementById('formulario');
	var datos=new FormData(formulario);
	console.log(datos);
	ajax = new XMLHttpRequest()
	ajax.open("POST", "update.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send(datos);
}


function ordenar(orden) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	
	ajax = new XMLHttpRequest()
	ajax.open("GET", "read.php?ordenar=" + orden, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}