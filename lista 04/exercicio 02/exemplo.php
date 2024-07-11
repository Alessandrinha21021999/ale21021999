<?php
function swap(&$a, &$b) {
    printf("Valores antes da troca: A = %d, B = %d\n", $a, $b);
    $temp = $a;
    $a = $b;
    $b = $temp;
    printf("Valores após a troca: A = %d, B = %d\n", $a, $b);
?>