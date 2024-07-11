<?php
function areaCirculo($raio) {
    $pi = 3.14159;
    $area = $pi * pow($raio, 2);
    return $area;
}
$raio = 5; 
$areaCalculada = areaCirculo($raio);
echo "A área do círculo é " . number_format($areaCalculada, 3) . "\n";
?>