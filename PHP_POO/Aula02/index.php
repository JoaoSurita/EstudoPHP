<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php
        // Importa a definição da classe Caneta
        require_once 'Caneta.php';

        // Criando o objeto $c1 (caneta azul)
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        print_r($c1); // Mostra os atributos do objeto
        echo "<br>";

        $c1->destampar();
        $c1->rabiscar();
        echo "<br>";

        // Criando o objeto $c2 (caneta vermelha)
        $c2 = new Caneta;
        $c2->cor = "Vermelha";
        $c2->ponta = 0.5;
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);

    ?>
</body>
</html>