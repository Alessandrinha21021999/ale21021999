<?php
function buscaMaiorValor($valor1, $valor2, $valor3) {
    $maior = $valor1;
    if ($valor2 > $maior) {
        $maior = $valor2;
    }
    if ($valor3 > $maior) {
        $maior = $valor3;
    }
    return $maior;
}
$numero1 = 10;
$numero2 = 25;
$numero3 = 15;
$resultado = buscaMaiorValor($numero1, $numero2, $numero3);
echo "O maior valor informado foi $resultado\n";
?>