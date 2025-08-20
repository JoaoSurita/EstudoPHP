<?php
    $frase = "Eu estudo PHP";

    // Conta quantas palavras existem na string $frase
    $cont = str_word_count($frase, 0);

    echo $cont;