<?php

$a = 5;
$b= 6;
$c= 7;

if ($b > $a && $b < $c || $b < $a && $b > $c){
  echo "b je između a i c";
}
else {
    echo "b nije između";
}

