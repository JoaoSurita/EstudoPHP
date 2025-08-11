<?php
    $preco = $_GET["p"];

    echo "O preço do produto recebido é de R$". number_format($preco, 2);
    $preco += $preco*10/100;

    echo "</br>O aumento no valor do produto será de R$". number_format($preco, 2);
?>