function listar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'read.php', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) 
			
			lsita = JSON.parse(ajax.responseText)
			console.logl(lista);
			html="";
			 

			for(i=0; i<lista.length; i++)
			{
				html+=

				`
		<tr>
        <td>${lista[i].fotografia}</td>
        <td>${lista[i].nombre}</td>
        <td>${lista[i].apellidos}</td>
        <td>${lista[i].carnet}</td>
        <td>${lista[i].sexo}</td>
        <td>${lista[i].fecha_nacimiento}</td>
        <td>${lista[i].direccion}</td>
        <td>${lista[i].mesa}</td>
        </tr> 
			` 
			}
			contenedor.innerHTML = ajax.responseText

		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();

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

function eliminar(id) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'delete.php?id='+id, true);
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