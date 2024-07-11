function verificarMaiorValor() {
    var valor1 = parseInt(document.getElementById('valor1').value);
    var valor2 = parseInt(document.getElementById('valor2').value);
    var valor3 = parseInt(document.getElementById('valor3').value);
    var maior = valor1;
    if (valor2 > maior) {
        maior = valor2;
    }
    if (valor3 > maior) {
        maior = valor3;
    }
    document.getElementById('resultado').innerHTML = `O maior valor informado foi ${maior}`;
}