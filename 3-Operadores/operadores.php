<?php
    $num1 = $_GET["a"];
    $num2 = $_GET["b"];

    $result = $num1 + $num2;
    echo "A soma entre $num1 e $num2 resulta em $result <br>";
    echo "<br>A soma vale ". ($num1 + $num2);
    echo "<br>A subtração vale ". ($num1 - $num2);
    echo "<br>A multiplicação vale ". ($num1 * $num2);
    echo "<br>A divisão vale ". ($num1 / $num2);
    echo "<br>O módulo da divisão vale ". ($num1 % $num2);
    ?>