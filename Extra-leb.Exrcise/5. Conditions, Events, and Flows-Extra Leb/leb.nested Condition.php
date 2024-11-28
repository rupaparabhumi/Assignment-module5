<?php
if(isset($_POST["submit"]))
{
    $number=$_POST["number"];
if ($number>0)
{
    echo $number."is a positive number"."<br>";
}
else if($number<0)
{
    echo $number."is a negative number"."<br>";
}
else 
{
    echo $number."is a Zero"."<br>";
}
if ($number %2 == 0)
{
    echo $number."is a Even number"."<br>";
}
else 
{
    echo $number."is a odd number";
}
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
    <center>
 <form method="post">
    <input type="text" name="number" placeholder="Enter your number">
    <br> <br>
    <input type="submit" name="submit" value="submit">
 </from>
</center>
    
</body>
</html>