<?php
$size = 8;
for ($row = 0; $row < $size; $row++)
{
    for ($col = 0; $col < $size; $col++)
     {
       if (($row + $col) % 2 == 0) 
        {
         echo "⬜";
        } 
        else 
        {
           echo "⬛";
        }
    }
     echo "<br>";
}
?>


 