<?php

$int = 80;          
$float = 23.9;      
$string = "768";   
$bool = true;       

echo "input Values and Types:"."<br>";
echo  "Integer: Value = $int", gettype($int)."<br>";
echo "Float:Value = $float", gettype($float)."<br>";
echo "string: Value = $string",gettype($string)."<br>";
echo "Boolean:Value = $bool",  gettype($bool)."<br>"."<br>";


$intToFloat = (float) $int;        
$stringToInt = (int) $string;       
$floatToInt = (int) $float;         
$boolToInt = (int) $bool;           

echo "Converted Values and Types:"."<br>";
echo "Integer to Float: Value = $intToFloat",  gettype($intToFloat)."<br>";
echo "String to Integer: Value = $stringToInt", gettype($stringToInt)."<br>";
echo "Float to Integer: Value = $floatToInt",  gettype($floatToInt)."<br>";
echo "Boolean to Integer: Value = $boolToInt",  gettype($boolToInt)."<br>";
?>


