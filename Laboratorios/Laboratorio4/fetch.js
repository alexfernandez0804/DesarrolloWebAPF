function bandeja_entrada() {
    fetch("bandeja_entrada.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        });
}

function bandeja_salida() {
    fetch("bandeja_salida.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        });
}

function verMensaje(id) {
    fetch(`ver.php?id=${id}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('mensaje').innerHTML = data;
            document.getElementById('modal').style.display = 'flex';
        });
}

function cerrarModal() {
    document.getElementById('modal').style.display = 'none';
}



