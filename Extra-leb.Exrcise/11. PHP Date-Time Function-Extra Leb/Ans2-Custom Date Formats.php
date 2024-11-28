<?php
$current_date = new DateTime();

// Format and display the current date 
echo "Current date in Y-m-d format: " . $current_date->format('Y-m-d') . "<br>";
echo "Current date in d/m/Y format: " . $current_date->format('d/m/Y') . "<br>";
echo "Current date in l, F jS Y format: " . $current_date->format('l, F jS Y') . "<br>";
echo "Current date in jS F Y format: " . $current_date->format('jS F Y') . "<br>";
echo "Current date in D, M d, Y format: " . $current_date->format('D, M d, Y') . "<br>";
?>
