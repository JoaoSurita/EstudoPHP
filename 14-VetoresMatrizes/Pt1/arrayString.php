<?php
    $v = array ("nome"=>"Ana", "idade"=>23, "peso"=>65.5);

    unset($v[0]);
    print_r($v);