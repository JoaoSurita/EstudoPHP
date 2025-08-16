<?php
    $d = $_GET["ds"];

    switch ($d) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar!";
            break;
        case 7:
        case 8:
            echo "Pode descansar, hoje não tem aula.";
            break;
        default:
            echo "Digite um dia da semana válido.";
    }
?>