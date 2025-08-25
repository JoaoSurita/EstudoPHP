<?php
    // Vendo a Diferença entre igual e idêntico.
    $a = 3;
    $b = "3";
    // As variáveis são iguais, mas não idênticas.

    $r = $a == $b?"Sim":"Não";
    // Operador Ternário. Basicamente um (if, else) compacto.

    echo "As variáveis A e B são iguais? $r <br>";
    // O "==" verifica se ambas têm o mesmo valor.
    // A saída da variável "r" será "SIM".
    
    $r = $a === $b?"Sim":"Não";
    echo "As variáveis A e B são idênticas? $r";
    // Já "===" verifica se ambas têm o mesmo valor e o mesmo tipo.
    // A saída da variável "r" será "NÃO".
?>