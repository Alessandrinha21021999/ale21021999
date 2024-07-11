<?php
function ehPar($numero) {
    if ($numero % 2 == 0) {
        return 1; 
    } else {
        return 0;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;
    $resultado = ehPar($numero);
    if ($resultado == 1) {
        echo "O número $numero é PAR.";
    } else {
        echo "O número $numero é ÍMPAR.";
    }
}
?>