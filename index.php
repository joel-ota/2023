<?php

$Harry= [5,6,7,8,9];

foreach ($Harry as $number) {
    
    $number++;
    $number %2 ==0;
   
    
    unset($Harry[$number]);
    var_dump ($Harry);
    
}

