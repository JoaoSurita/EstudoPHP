<?php
    $num1 = $_GET["a"];
    $num2 = $_GET["b"];
    // O "$" indica uma variável em PHP.
    // Valores definidos na URL.
    // Ex: ?x=10&y=4

    echo "<br>A soma vale ". ($num1 + $num2);
    //Ex: A soma vale 14.

    echo "<br>A subtração vale ". ($num1 - $num2);
    //Ex: A subtração vale 6.

    echo "<br>A multiplicação vale ". ($num1 * $num2);
    //Ex: A multiplicação vale 40.

    echo "<br>A divisão vale ". ($num1 / $num2);
    //Ex: A divisão vale 2,5.

    echo "<br>O módulo da divisão vale ". ($num1 % $num2);
    //Ex: O módulo da divisão vale 2. 
    // (Considerando apenas o quociente inteiro da divisão)
    ?>