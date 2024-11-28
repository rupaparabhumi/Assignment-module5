<?php

date_default_timezone_set('UTC');

$today = new DateTime(); 
$next_birthday = new DateTime('2025-04-28'); 

// Calculate the difference between the two dates
$interval = $today->diff($next_birthday);
echo "Time difference between today and the next birthday: " . $interval->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');
?>
