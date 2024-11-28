<?php

$array1 = [8,6,9,4,3];
echo "Original Array (sort):";
print_r($array1)."<br>";

sort($array1);
echo "Sorted Array (sort):";
print_r($array1)."<br>";

$array2 = [3,7,5,9,2];
echo "Original Array (rsort):";
print_r($array2)."<br>";

rsort($array2);
echo "Sorted Array (rsort):";
print_r($array2)."<br>";

$array3 = [
    "apple" => 3,
    "banana" => 1,
    "cherry" => 2
];

echo "Original Associative Array (asort):";
print_r($array3)."<br>";

asort($array3);
echo "Sorted Associative Array (asort):";
print_r($array3)."<br>";

$array4 = [
    "apple" => 3,
    "banana" => 1,
    "cherry" => 2
];

echo "Original Associative Array (ksort):";
print_r($array4);


ksort($array4);
echo "Sorted Associative Array (ksort):";
print_r($array4);
?>
