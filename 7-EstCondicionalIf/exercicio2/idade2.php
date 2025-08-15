<?php
    $a = $_GET["ano"];
    $idade = date("Y") - $a;

    echo "Você nasceu em $a e terá $idade anos <br>";

    if($idade<16) {
        $v = "Não Vota";
    } elseif (($idade>=16 && $idade < 18) || ($idade>65)) {
            $v = "Voto Opcional";
        } else {
            $v = "Voto Obrigatório";
        }

    echo "Para essa idade, $v";
?>