<?php

if(file_exists("file.php"))
{
  $file = fopen("file.php");
} 
else 
{
  echo "Error: The file does not exist.";
}
?>
