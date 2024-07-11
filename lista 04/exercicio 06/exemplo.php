<?php
function areaRetangulo($base, $altura) {
    $area = $base * $altura;
    return $area;
}
$base = 10; 
$altura = 5; 
$areaCalculada = areaRetangulo($base, $altura);
echo "A área do retângulo é " . number_format($areaCalculada, 3) . "\n";
?>