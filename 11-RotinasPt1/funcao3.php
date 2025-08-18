<?php
    function soma () {
        $p = func_get_args();
        // Retorna todos os argumentos da função em um array
        $t = func_num_args();
        // Retorna a quantidade de argumentos recebidos pela função
        $s = 0;
        for($i=0; $i<$t; $i++) {
            $s += $p[$i];
        }
        return $s;
    }

    $r = soma(3, 5, 2, 10);
    echo "A soma dos valores é $r"
?>