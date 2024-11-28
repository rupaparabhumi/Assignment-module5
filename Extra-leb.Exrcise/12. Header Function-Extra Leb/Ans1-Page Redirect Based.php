<?php

$isLoggedIn = true; 

if (!$isLoggedIn) {
    header("Location:page Redirect Based.php");
    exit(); 
}

echo "Welcome to the protected page!";
?>
