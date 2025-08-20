<?php
    $vetor[0]="Curso";
    $vetor[1]="em";
    $vetor[2]="Vídeo";

    // Junta os elementos do array $vetor em uma única string, separados pelo caractere "#"
    $texto = implode("#", $vetor);
    print($texto);