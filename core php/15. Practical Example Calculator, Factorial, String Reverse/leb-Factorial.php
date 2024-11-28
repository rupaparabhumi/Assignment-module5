<?php
function factorial($num) 
{
    if ($num == 0 || $num == 1) 
    {
        return 1;
    }
      return $num * factorial($num - 1);
}

if(isset($_POST["submit"]))
{
    $num=$_POST["num"];
    echo "Factorial of $num is: " . factorial($num);
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
            <input type="text" name="num" placeholder="Enter your number">
            <br>
            <input type="submit" name="submit" value="submit">
        </from>
    </center>
    
</body>
</html>





