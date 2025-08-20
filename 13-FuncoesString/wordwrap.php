<?php
    $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
    
    // Quebra o texto a cada 20 caracteres e insere <br> para pular linha
    $r = wordwrap($t, 20, "<br>");

    echo $r;