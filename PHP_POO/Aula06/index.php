<pre>
    <?php
        require_once 'ControleRemoto.php';
    
        $c = new ControleRemoto();

        $c->ligar();
        $c->maisVolume();
        $c->abrirMenu(); 
    ?>
</pre>