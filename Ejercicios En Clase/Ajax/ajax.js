function listar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'read.php', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function ordenar(ordenar) {
    var contenedor;
	contenedor = document.getElementById('contenido');

	var ajax = new XMLHttpRequest()
	ajax.open("get", 'read.php?ordenar=' + ordenar, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}

function buscar(buscar) {
    var contenedor;
	contenedor = document.getElementById('contenido');
	var buscar = document.getElementById('form_buscar').buscar.value;

	var ajax = new XMLHttpRequest()
	ajax.open("get", 'read.php?buscar=' + encodeURIComponent(buscar), true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}

function crea_lista_parametros() {
	var tTitulo = document.getElementById("tTitulo");
	var tIdentidad = document.getElementById("tIdentidad");
	var tNombres = document.getElementById("tNombres");
	var tApellidos = document.getElementById("tApellidos");
	var RGSexo = document.getElementById("RGSexo");
	var tEdad = document.getElementById("tEdad");
	var tEmail = document.getElementById("tEmail");
	var SDepartamento = document.getElementById("SDepartamento");
	var tProfesion = document.getElementById("tProfesion");
	var sTipo = document.getElementById("sTipo");
	var tNumeroDeposito = document.getElementById("tNumeroDeposito");
	return "tTitulo=" + encodeURIComponent(tTitulo.value) +
		"&tIdentidad=" + encodeURIComponent(tIdentidad.value) +
		"&tNombres=" + encodeURIComponent(tNombres.value) +
		"&tApellidos=" + encodeURIComponent(tApellidos.value) +
		"&nocache=" + Math.random();
}
function Preinscribir() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var cadena = crea_lista_parametros();
	
	ajax = new XMLHttpRequest()
	ajax.open("POST", "preinscribir.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
	ajax.send(cadena);
}
