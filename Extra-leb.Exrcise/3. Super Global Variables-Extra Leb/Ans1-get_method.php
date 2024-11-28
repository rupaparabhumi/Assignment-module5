<?php
if(isset($_GET["submit"]))
{
    $name=$_GET["name"];
    $password=$_GET["password"];
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
    <form method="get">
        <input type="text" name="name" placeholder="Enter your name"/>
        <br>
        <input type="text" name="password" placeholder="Enter your password"/>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</center>
</body>
</html>