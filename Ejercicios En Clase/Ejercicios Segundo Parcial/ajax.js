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
