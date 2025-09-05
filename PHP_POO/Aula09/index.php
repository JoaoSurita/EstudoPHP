<pre>
    <?php
        require_once 'Livro.php';
        require_once 'Pessoa.php';
    
        $p[0] = new Pessoa("João", 18, "Masculino");
        $p[1] = new Pessoa("Maria", 19, "Feminino");
    
        $l[0] = new Livro("Noites Brancas", "Dostoiévski", 86, $p[0]);
        $l[1] = new Livro("A Metamorfose", "Kafka", 96, $p[1]);

        $l[0]->detalhes();
        $l[0]->abrir();
        $l[0]->folhear(90);
        
    ?>
</pre>