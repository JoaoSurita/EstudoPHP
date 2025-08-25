<?php
    //Codigo que permita que o usuário escolha entre somar e multiplicar dois números
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    echo "Os números passados foram $n1 e $n2 <br>";

    // Operador Unário
    $r = ($tipo == "s")?$n1+$n2:$n1*$n2;

    echo "O resultado da Operação será $r";
?>