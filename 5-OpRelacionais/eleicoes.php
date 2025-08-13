<?php
    $ano = $_GET["an"];

    $idade = 2025 - $ano;

    echo "quem nasceu em $ano, tem $idade anos <br>";

    $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";

    echo "E dessa forma, seu voto é $tipo"
?>