<?php

    $a=1;
    $b=1.5;
    $c="string";
    $d=true;
    
    define ('PI',3.14);

    var_dump ($a,$b,$c,$d,PI);

    $h=5;
    $j=&$h;
    $h=6;
    var_dump ($j);
