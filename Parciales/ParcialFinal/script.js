function listar() {
	var principal;
	principal = document.getElementById('principal');
	fetch('read.php')
		.then(response => response.text())
		.then(data => principal.innerHTML=data);
}

function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function eliminar(id) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch('delete.php?id='+id)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
	
function actualizar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var formulario=document.getElementById('formulario');
	var datos=new FormData(formulario);
	console.log(datos);
	fetch('update.php',{method:"POST",
		body:datos} )
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}






function pregunta4() {
    fetch("ecuacion.html")
        .then((response) => response.text())
        .then((data) => {
            var principal = document.getElementById("principal");
            principal.innerHTML = data;

            var botonCalcular = document.getElementById("calcular");
            botonCalcular.addEventListener("click", () => {
                var a = parseFloat(document.getElementById("a").value);
                var b = parseFloat(document.getElementById("b").value);
                var c = parseFloat(document.getElementById("c").value);

                calcularRaices(a, b, c);
            });
        });
}

function calcularRaices(a, b, c) {
    var discriminante = b * b - 4 * a * c;
    var raiz1 = document.getElementById("raiz1");
    var raiz2 = document.getElementById("raiz2");

    if (discriminante >= 0) {
        var x1 = (-b + Math.sqrt(discriminante)) / (2 * a);
        var x2 = (-b - Math.sqrt(discriminante)) / (2 * a);
        raiz1.innerHTML = `x1 = ${x1}`;
        raiz2.innerHTML = `x2 = ${x2}`;
    } else {
        const real = -b / (2 * a);
        const imaginario = Math.sqrt(-discriminante) / (2 * a);
        raiz1.innerHTML = `x1 = ${real} + <span style="color: red;">${imaginario}i</span>`;
        raiz2.innerHTML = `x2 = ${real} - <span style="color: red;">${imaginario}i</span>`;
    }
}



function pregunta5() {
    fetch("colores.html")
        .then((response) => response.text())
        .then((data) => {
            var principal = document.getElementById("principal");
            principal.innerHTML = data;

            let colorSeleccionado = '';

            document.querySelectorAll("td").forEach((celda) => {
                celda.addEventListener("click", () => {
                    colorSeleccionado = celda.style.backgroundColor;
                });
            });

            const secciones = ["navegacion", "menu", "principal", "pie", "login"];
            secciones.forEach((id) => {
                const elemento = document.getElementById(id);
                if (elemento) {
                    elemento.addEventListener("click", () => {
                        elemento.style.backgroundColor = colorSeleccionado;
                    });
                }
            });
        });
}
