<?php
    $v = array(2=>5, 0=>2, 6=>9, 3=>7);
    print_r($v);

    array_push($v, 4);
    print_r($v);

    array_pop($v);
    print_r($v);

    array_unshift($v, 5);
    print_r($v);
    
    array_shift($v);
    print_r($v);

    sort($v);
    print_r($v);

    rsort($v);
    print_r($v);

    asort($v);
    print_r($v);
    
    arsort($v);
    print_r($v);

    ksort($v);
    print_r($v);
