function modal() {
    var loginModal = document.getElementById("modal-content");
    fetch("login.php")
        .then(response => response.text())
        .then(data => (loginModal.innerHTML = data));
}
function listar() {
    var loginModal = document.getElementById("principal");
    fetch("listar.php")
        .then(response => response.text())
        .then(data => (loginModal.innerHTML = data));
}

function eliminar(id) {
	var contenedor;
	contenedor = document.getElementById('principal');
	fetch('delete.php?id='+id)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function actualizar() {
	var contenedor;
	contenedor = document.getElementById('principal');
	var formulario=document.getElementById('formulario');
	var datos=new FormData(formulario);
	console.log(datos);
	fetch('form_update.php',{method:"POST",
		body:datos} )
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
