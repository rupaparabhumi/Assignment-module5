<?php

function checkSundayInTimeZone($timeZone) {
    $dateTime = new DateTime('now', new DateTimeZone($timeZone));
    
    $dayOfWeek = $dateTime->format('w');

    if ($dayOfWeek == 0) {
        echo "Happy Sunday from " . $timeZone . " time zone!";
    } else {
        echo "It's not Sunday in " . $timeZone . " time zone.";
    }
}
$timeZones = [
    'America/New_York',  
    'Europe/London',     
    'Asia/Tokyo',       
    'Australia/Sydney', 
    'UTC'          
];
foreach ($timeZones as $zone)
 {
    checkSundayInTimeZone($zone);
    echo "<br>"; 
}
?>
