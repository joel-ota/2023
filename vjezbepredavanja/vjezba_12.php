<?php

function brojevi ($numbers){
    static $a=1;
    $a += $numbers;	
    return $a;

}

$dodavanje = 'brojevi';

print_r ($dodavanje(rand(1,10)));
"\n";
print_r ($dodavanje(rand(1,10)));
"\n";
print_r ($dodavanje(rand(1,10)));
"\n";
print_r ($dodavanje(rand(1,10)));
"\n";
print_r ($dodavanje(rand(1,10)));
"\n";
