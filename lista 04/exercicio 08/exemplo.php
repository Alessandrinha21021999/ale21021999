<?php
function converteFahrenheitParaCelsius($fahrenheit) {
    $celsius = ($fahrenheit - 32) * 5 / 9;
    return $celsius;
}
$fahrenheit = 100; 
$celsiusCalculado = converteFahrenheitParaCelsius($fahrenheit);
echo "{$fahrenheit}F eh equivalente a {$celsiusCalculado}C\n";
?>