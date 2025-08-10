<?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];

    echo "<h2>Valores Recebidos: $n1 e $n2</h2> <br>";
    echo "O valor absoluto de $n2 é ". abs($n2);
    echo "<br> O valor de $n1 elevado a $n2 é ". pow($n1, $n2);
    echo "<br> A Raiz quadrada de $n1 é ". sqrt($n1);
    echo "<br> O valor arredondado de $n2 é ". round($n2);
    //ceil = arredonda pra cima
    //floor = arredonda pra baixo
    echo "<br> A parte inteira de $n2 é ". intval($n2);
    echo "<br> O valor em moeda de $n1 é R$". number_format($n1, 2, ",", ".");
    
?>