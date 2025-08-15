<?php
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];

    $m = ($n1 + $n2) / 2;

    echo "A média entre $n1 e $n2 é $m <br>";

    if ($m >= 6) {
        $s = "APROVADO";
    } else {
        $s = "REPROVADO";
    }

    echo "Situação do Aluno: $s"
?>