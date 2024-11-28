<?php

$isJsonResponse = true; 

if ($isJsonResponse) {
    header('Content-Type: Content-type Header.php');
    
    // Create a sample JSON response
    $data = array(
        "status" => "success",
        "message" => "This is a JSON response"
    );

    echo json_encode($data);
} 
else
 {
    header('Content-Type: text/plain');
    
    $textResponse = "This is a plain text response.";
    
    echo $textResponse;
}
?>
