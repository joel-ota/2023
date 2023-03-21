<?php

$primenumbers = ['prvi'=>1,
'drugi'=>2,
'treci'=>3,
'cetvrti'=>4,
'peti'=>5];
if (array_search(4,$primenumbers)!==true){
    print_r ($primenumbers['cetvrti']) ;
    "\n";
}
else {
    echo "ne postoji";
}
"\n";
$primenumbers['šesti']=6;
"\n";
var_dump (count($primenumbers));
"\n";
print_r ($primenumbers);
"\n";

var_dump (ksort($primenumbers));
print_r ($primenumbers);
