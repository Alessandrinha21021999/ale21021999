function verificarAnoBissexto() {
    var ano = parseInt(document.getElementById('ano').value);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'verificarAnoBissexto.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('resultado').innerHTML = xhr.responseText;
        }
    };
    xhr.send('ano=' + ano);
}