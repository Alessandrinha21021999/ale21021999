function calcularAreaQuadrado() {
    var base = parseInt(document.getElementById('base').value);
    var altura = parseInt(document.getElementById('altura').value);
    var area = base * altura;
    document.getElementById('resultado').innerHTML = `A área do quadrado é ${area.toFixed(3)}`;
}