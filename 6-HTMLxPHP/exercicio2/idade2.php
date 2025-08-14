<?php
    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    $idade = 2025 - $ano;

    echo "$nome é $sexo e tem $idade anos."
?>
