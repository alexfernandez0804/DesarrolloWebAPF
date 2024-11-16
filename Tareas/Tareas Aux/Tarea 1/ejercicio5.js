let pantallaInferior = document.querySelector(".inferior");
let pantallaSuperior = document.querySelector(".superior");

let valor1 = null;
let valor2 = null;
let operacion = null;

let teclasNumeros = document.querySelectorAll(".numero");
teclasNumeros.forEach((tecla) => {
  tecla.addEventListener("click", () => {
    pantallaInferior.innerHTML += tecla.innerHTML;
  });
});

let teclasOperaciones = document.querySelectorAll(".operacion");
teclasOperaciones.forEach((tecla) => {
  tecla.addEventListener("click", () => {
    let op = tecla.innerHTML;

    pantallaSuperior.innerHTML = pantallaInferior.innerHTML + " " + op;
    valor1 = parseFloat(pantallaInferior.innerHTML);

    if (isNaN(valor1)) {
      pantallaInferior.innerHTML = "Error";
      return;
    }

    operacion = op;
    pantallaInferior.innerHTML = ""; 
  });
});

let teclaIgual = document.querySelector("#igual");
teclaIgual.addEventListener("click", () => {
  if (!operacion || valor1 === null) {
    pantallaInferior.innerHTML = "Error";
    return;
  }

  valor2 = parseFloat(pantallaInferior.innerHTML);
  let resultado;

  if (isNaN(valor2) && (operacion !== "√" && operacion !== "log" && operacion !== "!")) {
    pantallaInferior.innerHTML = "Error";
    return;
  }

  switch (operacion) {
    case "+":
      resultado = valor1 + valor2;
      break;
    case "-":
      resultado = valor1 - valor2;
      break;
    case "*":
      resultado = valor1 * valor2;
      break;
    case "/":
      resultado = valor2 !== 0 ? valor1 / valor2 : "Error";
      break;
    case "^":
      resultado = Math.pow(valor1, valor2);
      break;
    case "√":
      resultado = Math.sqrt(valor1);
      break;
    case "log":
      resultado = Math.log10(valor1);
      break;
    case "!":
      resultado = factorial(valor1);
      break;
    default:
      resultado = "Error";
  }

  pantallaSuperior.innerHTML = `${valor1} ${operacion} ${valor2 || ""}`;
  pantallaInferior.innerHTML = resultado;
  valor1 = resultado; 
  operacion = null; 
});

let allClearButton = document.querySelector("#all-clear");
let deleteButton = document.querySelector("#delete");

allClearButton.addEventListener("click", () => {
  valor1 = null;
  valor2 = null;
  operacion = null;
  pantallaInferior.innerHTML = "";
  pantallaSuperior.innerHTML = "";
});

deleteButton.addEventListener("click", () => {
  pantallaInferior.innerHTML = pantallaInferior.innerHTML.slice(0, -1);
});

function factorial(n) {
  if (n < 0) return "Error";
  if (n === 0 || n === 1) return 1;
  return n * factorial(n - 1);
}
