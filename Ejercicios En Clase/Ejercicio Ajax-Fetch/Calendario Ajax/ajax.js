document.addEventListener("DOMContentLoaded", function () {
    mes_anio();

    document.getElementById("mes").addEventListener("change", mes_anio);
    document.getElementById("anio").addEventListener("change", mes_anio);
});

function mes_anio() {
    var mes = document.getElementById('mes').value;
    var anio = document.getElementById('anio').value;
    var ajax = new XMLHttpRequest();

    ajax.open('GET', 'calendario.php?mes=' + mes + '&anio=' + anio, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4 && ajax.status === 200) {
            document.getElementById('contenido').innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}
