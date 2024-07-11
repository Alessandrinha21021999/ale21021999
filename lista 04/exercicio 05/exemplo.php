<?php
function areaQuadrado($base, $altura) {
    $area = $base * $altura;
    return $area;
}
$base = 5;
$altura = 5;
$areaCalculada = areaQuadrado($base, $altura);
echo "A área do quadrado é " . number_format($areaCalculada, 3) . "\n";
?>