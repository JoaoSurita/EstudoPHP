<?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];

    echo "<h2>Valores Recebidos: $n1 e $n2</h2> <br>";
    // Valores definidos na URL.
    // Ex: ?x=10&y=4

    echo "O valor absoluto de $n2 é ". abs($n2);
    // Ex: O valor absoluto de -3 é 3.

    echo "<br> O valor de $n1 elevado a $n2 é ". pow($n1, $n2);
    // Ex: O valor de 3 elevado a 2 é 9.

    echo "<br> A Raiz quadrada de $n1 é ". sqrt($n1);
    // Ex: A raiz quadrada de 25 é 5.

    echo "<br> O valor arredondado de $n2 é ". round($n2);
    // Ex: O valor arredondado de 3.6 é 4.
    //ceil = arredonda pra cima.
    //floor = arredonda pra baixo.

    echo "<br> A parte inteira de $n2 é ". intval($n2);
    //Ex: A parte inteiro de 4.85 é 4.

    echo "<br> O valor em moeda de $n1 é R$". number_format($n1, 2, ",", ".");
    //Ex: O valor em moeda de 7 é R$7,00.
?>