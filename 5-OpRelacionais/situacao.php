<?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];

    $m = ($nota1 + $nota2) / 2;
    
    echo "A média entre $nota1 e $nota2 é $m <br>";
    echo "Situação do Aluno: ". (($m<6)?"REPROVADO":"APROVADO");
?>