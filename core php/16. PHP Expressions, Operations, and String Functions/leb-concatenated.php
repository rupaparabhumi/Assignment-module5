<?php
if(isset($_POST["submit"]))
{
    $string1=$_POST["string1"];
    $string2=$_POST["string2"];

$concatenatedString = $string1 . $string2;
echo "Concatenated String: " . $concatenatedString . "\n";

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        <input type="text" name="string1" placeholder="Enter your string1">
        <br>
        <input type="text" name="string2" placeholder="Enter your string2">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>



