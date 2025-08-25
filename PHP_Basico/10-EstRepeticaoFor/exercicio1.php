<?php
    $n = (float) ($_GET["num"]??1);

    for ($c=1; $c<=10; $c++) {
        $r = $n * $c;
        echo "$n x $c = $r <br>";
    }
?>