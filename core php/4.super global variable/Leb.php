<?php
if(isset($_POST["login"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
   
    echo "<h3 style='text-align:center'>Hello $name and your email is $email</h3>";
      
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
        <h3>login page</h3>
<form method="post">
name:<input type="text" name="name" placeholder="Enter your name"> 
<br>
Email-id:<input type="text" name="email" placeholder="Enter your email">
<br>
<input type="submit" name="login" name="submit">

</form>
</center>

</body>
</html>