<?php

$array1 = [1,2,3,4,5];
$array2 = [10,9,8,7,6];

// Merge the two arrays using array_merge
$mergedArray = array_merge($array1, $array2);

$diffArray1 = array_diff($array1, $array2); 
$diffArray2 = array_diff($array2, $array1); 
echo "Merged Array:";
print_r($mergedArray);

echo "Difference (Array1 - Array2): ";
print_r($diffArray1)."<br>";

echo "Difference (Array2 - Array1): ";
print_r($diffArray2);
?>
