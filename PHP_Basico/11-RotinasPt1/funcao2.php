<?php
    function soma ($a, $b) {
        $s = $a + $b;
        return $s; // Simplificado -> return $a+$b
    }

    $x = 3;
    $y = 4;

    $r = soma($x, $y);

    echo "A soma entre $x e $y é $r";
?>