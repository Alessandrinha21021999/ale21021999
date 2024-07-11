function calcularAreaRetangulo() {
    var base = parseInt(document.getElementById('base').value);
    var altura = parseInt(document.getElementById('altura').value);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'calcularAreaRetangulo.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('resultado').innerHTML = xhr.responseText;
        }
    };
    xhr.send('base=' + base + '&altura=' + altura);
}