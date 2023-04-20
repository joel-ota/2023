<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if (($column == 4 and $row != 6) or ($row == 0 and $column > 2 and $column < 6) or ($row == 6 and $column == 3) or ($row == 5 and $column == 2) )
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}

for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if ($column == 1 or (($row == 0 or $row == 6) and ($column > 1 and $column < 6)) or ($row == 3 and $column > 1 and $column < 5))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ($column == 1 or ($row == 6 and $column != 0 and $column < 6))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}

for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if ($column == 1 or (($row == 0 or $row == 6) and ($column > 1 and $column < 6)) or ($row == 3 and $column > 1 and $column < 5))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ($column == 1 or $column == 5 or ($row == $column and $column != 0 and $column != 6))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}

?>