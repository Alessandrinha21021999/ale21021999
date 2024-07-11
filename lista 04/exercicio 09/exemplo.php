<?php
function ehBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        return 1; 
    } else {
        return 0; 
    }
}
$ano = 2400; 
$resultado = ehBissexto($ano);
if ($resultado == 1) {
    echo "O ano {$ano} eh bissexto\n";
} else {
    echo "O ano {$ano} nao eh bissexto\n";
}
?>