<?php
    require_once 'Caneta.php';

    $c1 = new Caneta("BIC", 0.5, "Azul"); // Utilizando o construct
    // Utilizando o método Setter ficaria:
    // $c1->setModelo("BIC");
    // $c1->setPonta(0.5);
    // $c1->setCor("Azul");
         
    print_r($c1);
    print "Eu tenho uma Caneta do modelo {$c1->getModelo()}, ponta {$c1->getPonta()}";
?>