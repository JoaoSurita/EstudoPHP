<?php
    $i = $_GET["inicio"];
    $f = $_GET["final"];
    $inc = $_GET["inc"];

    if ($i<$f) {
        while ($i<=$f) {
            echo "$i ";
            $i += $inc;
        }
    } else {
        while ($i>=$f) {
            echo "$i ";
            $i -= $inc;
        }
    }

    echo "<br><a href='contador.html'>Voltar</a>"
?>