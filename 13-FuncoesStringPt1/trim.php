<?php

$nome = "   João Pedro   ";

echo(strlen($nome));

// Remove espaços em branco do início e do fim da string $nome
$novo = trim($nome);

echo($novo);
echo(strlen($novo));