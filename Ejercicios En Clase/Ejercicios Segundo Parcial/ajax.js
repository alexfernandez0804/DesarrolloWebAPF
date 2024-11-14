var casilla = document.getElementById('casilla');
function tresenraya() {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'tresenraya.html', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            document.getElementById('contenido').innerHTML = ajax.responseText;
            var turno = 'X';
            window.marcarCasilla = function(casilla) {
                if (casilla.textContent === '') {  
                    casilla.textContent = turno;
                    turno = turno === 'X' ? 'O' : 'X';
                    document.getElementById('mensaje').textContent = `Turno ${turno}`;
                }
            };
        }
    };

    ajax.send();
}



function cargarTabla() {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'tabla.html', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            document.getElementById('contenido').innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}

function verificarLogin() {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'listar.php', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            document.getElementById('contenido').innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}


function mostrarLibros(order = 'ASC') {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'listarLibros.php?order=' + order, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            document.getElementById('contenido').innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}




function seleccionarLibros() {
    document.getElementById('contenido').innerHTML = `
        <select id="libros" onchange="actualizarImagen()">
            <option value="">Selecciona un libro</option>
        </select>
        <div id="imagenLibro" style="margin-top: 20px;">
            <!-- Aquí se mostrará la imagen del libro -->
        </div>
    `;
    cargarLibros();
}

function cargarLibros() {
    fetch('datos.php')
        .then(response => response.json())
        .then(data => {
            const select = document.getElementById('libros');
            select.innerHTML = '<option value="">Selecciona un libro</option>'; 
            data.forEach(libro => {
                const option = document.createElement('option');
                option.value = libro.imagen;
                option.textContent = libro.titulo;
                select.appendChild(option);
            });
        });
}

function actualizarImagen() {
    const select = document.getElementById('libros');
    const imagenLibro = document.getElementById('imagenLibro');
    const imagenSeleccionada = select.value;

    if (imagenSeleccionada) {
        imagenLibro.innerHTML = `<img src="${imagenSeleccionada}" alt="Imagen del libro" style="width:200px; height:auto;">`;
    } else {
        imagenLibro.innerHTML = ''; 
    }
}
