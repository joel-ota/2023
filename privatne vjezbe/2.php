<?php

$Harry= [5,6,7,8,9];



foreach (range(0, count($Harry), 2) as $key) {
  unset($Harry[$key]);
}
$Harry = array_merge($Harry);
$count = array_sum($Harry);

var_dump ($count);