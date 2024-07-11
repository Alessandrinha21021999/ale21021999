function calcularAreaCirculo() {
    var raio = parseFloat(document.getElementById('raio').value);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'calcularAreaCirculo.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('resultado').innerHTML = xhr.responseText;
        }
    };
    xhr.send('raio=' + raio);
}