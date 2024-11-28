<?php

$globalVar = "global variable";

function Scopes() {

    $localVar = " local variable";
    global $globalVar;

    echo $localVar . "<br>";  
    echo $globalVar . "<br>"; 
}

 Scopes();
echo $globalVar . "<br>";  
?>
