function redactar(){
    var ajax = new XMLHttpRequest();
    console.log(contenido.innerHTML);
    ajax.open("GET", "redactar.php", false);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4 && ajax.status == 200) {
        contenido.innerHTML = ajax.responseText;
      }
    };
    ajax.send();
}

function enviarMensaje() {
  var formulario = document.getElementById('formulario');
  var datos = new FormData(formulario);

  var ajax = new XMLHttpRequest();
  ajax.open("POST", "enviar.php", true);
  ajax.onreadystatechange = function () {
      if (ajax.readyState == 4 && ajax.status == 200) {
        alert(ajax.responseText);
        bandeja_salida();
      }
  };
  ajax.send(datos);
}
