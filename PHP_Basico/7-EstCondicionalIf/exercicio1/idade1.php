<?php
    $a = $_GET["ano"];
    $idade = date("Y") - $a;

    echo "Você nasceu em $a e terá $idade anos <br>";

    if($idade>=18) {
        $v = "você pode votar";
        $d = "pode dirigir";
    } else {
        $v = "você não pode votar";
        $d = "não pode dirigir";
    }

    echo "Com essa idade $v e $d";
?>