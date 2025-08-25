<?php
    $a = 3;
    $b = $a;
    $b += 5;

    echo "A variável A vale $a e a Variável B vale $b <br>";

    $c = 3;
    $d = &$c; // o "&" tem a função de "ligar" as variáveis
    $d += 5;

    echo "A variável A vale $c e a Variável B vale $d"
?>