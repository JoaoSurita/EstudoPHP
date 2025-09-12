<pre>
<?php
    require_once 'Pessoa.php';
    require_once 'Funcionario.php';
    require_once 'Professor.php';
    require_once 'Aluno.php';

    $p1 = new Pessoa();
    $p2 = new Funcionario();
    $p3 = new Professor();
    $p4 = new Aluno();

    $p1->setNome("Pedro");
    $p2->setNome("Elvira");
    $p3->setNome("Gerson");
    $p4->setNome("Maria");

    $p2->setSetor("Estoque");
    $p3->setSalario(2500.75);
    $p4->setCurso("DSM");

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
?>
</pre>