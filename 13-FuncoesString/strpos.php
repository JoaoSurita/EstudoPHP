<?php
    $frase = "Estou aprendendo PHP";

    // Procura a posição da primeira ocorrência da palavra "PHP" dentro da string $frase
    $pos = strpos($frase, "PHP");
    // stripos -> Procura a posição de "PHP" na frase (não diferencia maiúsculas e minúsculas)
    echo "A string foi econtrada na posição $pos";