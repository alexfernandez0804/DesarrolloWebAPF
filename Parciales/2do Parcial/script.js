function cargarBotones() {
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
      if (ajax.readyState == 4 && ajax.status == 200) {
          document.getElementById("menu").innerHTML = ajax.responseText;
      }
  };
  ajax.open("GET", "botones.html", true);
  ajax.send();
}

function ejecutarAccion(mensaje, accion) {
  actualizarHistorial(mensaje);
  accion();
}

function cargarNombre() {
  const principal = document.getElementById("principal");
  principal.innerHTML = `<p>Nombre: Alexander Paul Fernandez Acho </p><p> Carnet: 35-5463</p>`;
}

function actualizarHistorial(mensaje) {
  var historial = document.getElementById("historial");
  var nuevoMensaje = document.createElement("div");
  nuevoMensaje.innerText = mensaje;
  historial.appendChild(nuevoMensaje);
}





function pregunta2() {
    fetch("tablas.html")
        .then((response) => response.text())
        .then((data) => {
            principal.innerHTML = data;
            tabla.addEventListener("click", async () => {
              const results = await getCalc();
              generateTable(results);
            });
        });
}
  
async function getCalc() {
  let form = document.querySelector("form");
  var data = new FormData(form);
  const response = await fetch("calcular.php", { method: "POST", body: data });
  const result = await response.json();
  return result;
}
  
function generateTable(results) {
  results.forEach((element) => {
    resultsTable.innerHTML += `<tr>
        <td>${element["num1"]}</td>
        <td>${element["symbol"]}</td>
        <td>${element["num2"]}</td>
        <td>${element["equal"]}</td>
        <td>${element["result"]}</td>
    </tr>`;
  });
  resultsTable.style.display = "block";
}




let libros = [];
let indice = 0;

function pregunta3() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "imagen.html", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState === 4 && ajax.status === 200) {
      var principal = document.getElementById("principal");
      principal.innerHTML = ajax.responseText;
      cargarDatosLibros();
    }
  };
  ajax.send();
}

function cargarDatosLibros() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "datos.php", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState === 4 && ajax.status === 200) {
      libros = JSON.parse(ajax.responseText);
      mostrarImagen();
      var siguienteBtn = document.getElementById("siguiente");
      siguienteBtn.addEventListener("click", mostrarImagen);
    }
  };
  ajax.send();
}

function mostrarImagen() {
    var img = document.getElementById("imagen");
    img.src = libros[indice].imagen;
    indice++;
}






function pregunta4() {
  fetch("forminsertar3.html")
    .then((response) => response.text())
    .then((data) => {
      var principal = document.getElementById("principal");
      principal.innerHTML = data;

      const form = document.getElementById("form_insertar");
      form.addEventListener("submit", function (event) {
        event.preventDefault();
        insertarLibros();
      });
    });
}

function insertarLibros() {
  const form = document.getElementById("form_insertar");
  const datos = new FormData(form);

  fetch("insertar.php", {
    method: "POST",
    body: datos,
  })
    .then((response) => response.text())
    .then(() => {
      mostrarLibros();
    });
}

function mostrarLibros() {
  fetch("listar.php")
    .then((response) => response.text())
    .then((data) => {
      const principal = document.getElementById("principal");
      principal.innerHTML = data;
    });
}



function pregunta5() {
  fetch("colores.html")
    .then((response) => response.text())
    .then((data) => {
      var principal = document.getElementById("principal");
      principal.innerHTML = data;

      var colornuevo = document.getElementById("color");
      var seleccionado = document.getElementById("elemento");

      document.querySelector("form").addEventListener("change", () => {
        aplicarColor(colornuevo.value, seleccionado.value);
      });
    });
}

function aplicarColor(color, elementoId) {
  var elemento = document.getElementById(elementoId);
  elemento.style.backgroundColor = color;
}
