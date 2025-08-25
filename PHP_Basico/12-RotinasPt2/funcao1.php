<?php
    // Passagem de parâmetro por VALOR
    function teste($x) {
        $x += 2; // Só altera a cópia da variável
        echo "O valor de X é $x <br>";
    }

    $a = 3;
    teste($a);

    echo "O valor de A é $a <br>";
    // Continua 3, pois $a não foi alterado

    // Passagem de parâmetro por REFERÊNCIA
    function teste2(&$y) {
        $y += 2; // Altera a variável original
        echo "O valor de X é $y <br>";
    }

    $b = 3;
    teste2($b);

    echo "O valor de B é $b"
    // Vira 5, pois $b foi alterado dentro da função
?>