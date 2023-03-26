<?php
 


function getOddOccurrence($arr, $arr_size)
{
    $count = 0;
    for ($i = 0;
         $i < $arr_size; $i++)
    {
         
        for ($j = 0;
             $j < $arr_size; $j++)
        {
            if ($arr[$i] == $arr[$j])
                $count++;
        }
        if ($count % 2 != 0)
            return $arr[$i];
    }
  
}
 

$arr= array (20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5);

$n = sizeof($arr);

$b=getOddOccurrence ($arr, $n);

?>