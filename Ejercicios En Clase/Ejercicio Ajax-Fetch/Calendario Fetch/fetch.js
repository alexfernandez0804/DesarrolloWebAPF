function cargarCalendario() {
    var contenedor = document.getElementById('contenido');
    var mes = document.getElementById('mes').value;
    var anio = document.getElementById('anio').value;
    
    fetch(`calendario.php?mes=${mes}&anio=${anio}`)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data)
        .catch(error => {
            contenedor.innerHTML = "Error al cargar el calendario";
            console.error("Error:", error);
        });
}

function iniciarCalendario() {
    cargarCalendario();
}

document.addEventListener("DOMContentLoaded", iniciarCalendario);
document.getElementById("mes").addEventListener("change", cargarCalendario);
document.getElementById("anio").addEventListener("change", cargarCalendario);
