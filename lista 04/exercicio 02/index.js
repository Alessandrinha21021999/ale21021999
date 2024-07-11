function trocarValores() {
    var valorA = parseInt(document.getElementById('valorA').value);
    var valorB = parseInt(document.getElementById('valorB').value);
    var temp = valorA;
    valorA = valorB;
    valorB = temp;
    document.getElementById('resultado').innerHTML = `Valores após a troca: A = ${valorA}, B = ${valorB}`;
}
